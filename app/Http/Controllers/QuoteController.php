<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class QuoteController extends Controller
{
    public function getRandomQuote()
    {
        try {
            $response = Http::timeout(10)->get('https://api.quotable.io/random');
            
            if ($response->successful()) {
                return response()->json($response->json());
            }
            
            return $this->getFallbackQuote();
        } catch (\Exception $e) {
            Log::error('Failed to fetch quote: ' . $e->getMessage());
            return $this->getFallbackQuote();
        }
    }

    private function getFallbackQuote()
    {
        return response()->json([
            'content' => 'Stay positive. Work hard. Make it happen.',
            'author' => 'Unknown',
        ]);
    }
}