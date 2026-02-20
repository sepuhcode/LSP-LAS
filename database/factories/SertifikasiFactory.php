<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sertifikasi>
 *
 * Skema → PosisiLas ID ranges (from PosisiLasSeeder):
 *   1 (Fillet Welder)  → 1–24
 *   2 (Plate Welder)   → 25–53
 *   3 (Pipe Welder)    → 54–87
 *   4–13               → no posisi_las (null)
 *
 * User ID ranges (from UserSeeder):
 *   Asesors (real)     → 1–31
 *   Owners (user role) → 36–37
 */
class SertifikasiFactory extends Factory
{
    /** @var array<int, array{int, int}> */
    private const POSISI_RANGES = [
        1 => [1, 24],
        2 => [25, 53],
        3 => [54, 87],
    ];

    /** @var string[] */
    private const TUK_NAMES = [
        'PT. Krakatau Steel',
        'PT. Pupuk Indonesia',
        'PT. PLN (Persero)',
        'PT. Pertamina',
        'PT. Barata Indonesia',
        'PT. BBI (Biro Klasifikasi Indonesia)',
        'PT. Nindya Karya',
        'PT. Adhi Karya',
        'PT. PP (Pembangunan Perumahan)',
        'PT. Waskita Karya',
    ];

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $skemaId = $this->faker->numberBetween(1, 13);
        $tahun = $this->faker->numberBetween(2019, 2024);
        $seq = str_pad($this->faker->numberBetween(1, 999), 3, '0', STR_PAD_LEFT);

        $posisiId = isset(self::POSISI_RANGES[$skemaId])
            ? $this->faker->numberBetween(self::POSISI_RANGES[$skemaId][0], self::POSISI_RANGES[$skemaId][1])
            : null;

        $asesorId = $this->faker->numberBetween(1, 31);
        $asesor2Id = $this->faker->numberBetween(1, 31);

        // Ensure the two asesors are different
        while ($asesor2Id === $asesorId) {
            $asesor2Id = $this->faker->numberBetween(1, 31);
        }

        $tglUji = $this->faker->dateTimeBetween('-5 years', 'now');

        return [
            'name' => $this->faker->name(),
            'no_sertifikat' => "LSP-LAS/{$tahun}/{$seq}",
            'no_reg_sertifikat' => "{$seq}/REG/LSP-LAS/{$tahun}",
            'skema_sertifikasi_id' => $skemaId,
            'posisi_las_id' => $posisiId,
            'tuk' => $this->faker->randomElement(self::TUK_NAMES),
            'no_blangko' => strtoupper($this->faker->bothify('BL-####-??')),
            'tgl_uji' => $tglUji->format('Y-m-d'),
            'tgl_sertifikat' => $this->faker->dateTimeBetween($tglUji, '+3 months')->format('Y-m-d'),
            'asesor_id' => $asesorId,
            'asesor2_id' => $asesor2Id,
            'owner_id' => $this->faker->numberBetween(36, 37),
            'file_scan_sertifikat' => null,
        ];
    }
}
