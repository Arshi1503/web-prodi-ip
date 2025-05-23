<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class GoogleScholarService
{
    public function searchArticles(string $nama): array
    {
        // Pastikan $nama diterima dengan benar
        $query = $nama . ' International Women University'; // Menambahkan institusi

        $response = Http::get('https://serpapi.com/search', [
            'engine' => 'google_scholar',
            'q' => $query,
            'api_key' => env('SERPAPI_KEY'),
        ]);

        if ($response->successful()) {
            return $response->json()['organic_results'] ?? [];
        }

        return [];
    }

    public function searchAuthorProfile(string $nama): ?string
    {
        $query = $nama . ' Universitas Wanita Internasional';

        $response = Http::get('https://serpapi.com/search', [
            'engine' => 'google_scholar_profiles',
            'mauthors' => $query, // GANTI DI SINI
            'api_key' => env('SERPAPI_KEY'),
        ]);


        if ($response->successful()) {
            $profiles = $response->json()['profiles'] ?? [];

            if (!empty($profiles)) {
                return $profiles[0]['link'] ?? null;
            }
        }

        return null;
    }

    public function getArticlesByAuthorId(string $authorId): array
    {
        $response = Http::get('https://serpapi.com/search', [
            'engine' => 'google_scholar_author',
            'author_id' => $authorId,
            'api_key' => env('SERPAPI_KEY'),
        ]);

        if ($response->successful()) {
            return $response->json()['articles'] ?? [];
        }

        return [];
    }

    public function getCitationGraph(string $authorId): array
    {
        $response = Http::get('https://serpapi.com/search', [
            'engine' => 'google_scholar_author',
            'author_id' => $authorId,
            'api_key' => env('SERPAPI_KEY'),
        ]);

        if ($response->successful()) {
            return $response->json()['cited_by']['graph'] ?? [];
        }

        return [];
    }

    public function getCitationStats(string $authorId): array
    {
        $response = Http::get('https://serpapi.com/search', [
            'engine'    => 'google_scholar_author',
            'author_id' => $authorId,
            'api_key'   => env('SERPAPI_KEY'),
        ]);

        if (! $response->successful()) {
            return [];
        }

        $table = $response->json()['cited_by']['table'] ?? [];

        $stats = [];
        foreach ($table as $item) {
            // setiap $item = ['citations'=>[...] ] atau ['h_index'=>[...]] dsb
            $key = array_key_first($item);
            $stats[$key] = $item[$key];
        }

        return $stats;
    }
}