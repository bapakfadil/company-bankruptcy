<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'company_code',
        'year_of_data',
        'current_assets',
        'current_liabilities',
        'total_assets',
        'ebit',
        'net_income'
    ];

    // Calculate the Grover Method G-Score
    public function calculateGScore()
    {
        $workingCapitalToTotalAssets = ($this->current_assets - $this->current_liabilities) / $this->total_assets;
        $ebitToTotalAssets = $this->ebit / $this->total_assets;
        $returnOnAssets = $this->net_income / $this->total_assets;

        // Grover Method formula, adjust coefficients as per the original formula
        $gScore = 1.650 * $workingCapitalToTotalAssets + 3.404 * $ebitToTotalAssets + 0.366 * $returnOnAssets;

        return $gScore;
    }
}
