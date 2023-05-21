<?php

namespace Database\Seeders;

use App\Models\Source;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Source::create([
            'name' => 'website',
            'slug' => 'website',
            'type' => 'website'
         ]);

        $sources = [
          'instagram',
          'facebook',
          'linkedin',
          'pinterest',
          'twitter',
        ];

        foreach ($sources as $source) {
            Source::create([
                'name' => $source,
                'slug' => Str::slug($source),
                'type' => 'social-media'
            ]);
        }
    }
}
