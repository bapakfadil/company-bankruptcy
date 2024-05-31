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
        'gross_profit',
        'net_income'
    ];

    // Calculate the Grover Method G-Score
    public function calculateGScore()
    {
        $workingCapital = $this->current_assets - $this->current_liabilities;
        $x1 = $workingCapital / $this->total_assets;
        $x2 = $this->gross_profit / $this->total_assets;
        $roa = $this->net_income / $this->total_assets;

        // Grover Method formula with updated coefficients
        $gScore = (1.650 * $x1) + (3.404 * $x2) - (0.016 * $roa) + 0.057;

        return $gScore;
    }
}
