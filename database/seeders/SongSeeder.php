<?php

namespace Database\Seeders;

use App\Models\Song;
use Illuminate\Database\Seeder;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $songs = [
            [
                'title' => 'Beautiful Bangladesh - Traditional Folk Song',
                'youtube_url' => 'https://youtu.be/JlIfgl5xuJw?si=2WWL0baQRkWvStOt',
                'description' => 'A traditional folk song celebrating the beauty and culture of Bangladesh.',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'title' => 'Modern Bengali Pop - Contemporary Hits',
                'youtube_url' => 'https://youtu.be/kXYiU_JCYtU',
                'description' => 'Contemporary Bengali pop music featuring modern artists and styles.',
                'order' => 2,
                'is_active' => true,
            ],
            [
                'title' => 'Classical Bengali Music - Traditional Melodies',
                'youtube_url' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
                'description' => 'Classical Bengali music showcasing traditional instruments and melodies.',
                'order' => 3,
                'is_active' => true,
            ],
            [
                'title' => 'Bengali Rock - Modern Fusion',
                'youtube_url' => 'https://youtu.be/oHg5SJYRHA0',
                'description' => 'Bengali rock music combining traditional elements with modern rock.',
                'order' => 4,
                'is_active' => true,
            ],
            [
                'title' => 'Folk Tales in Song - Cultural Heritage',
                'youtube_url' => 'https://www.youtube.com/watch?v=Zi_XLOBDo_Y',
                'description' => 'Traditional folk tales told through song, preserving cultural heritage.',
                'order' => 5,
                'is_active' => true,
            ],
            [
                'title' => 'Bengali Wedding Songs - Celebration Music',
                'youtube_url' => 'https://youtu.be/2Vv-BfVoq4g',
                'description' => 'Traditional wedding songs and celebration music from Bengal.',
                'order' => 6,
                'is_active' => true,
            ],
        ];

        foreach ($songs as $song) {
            Song::create($song);
        }
    }
}
