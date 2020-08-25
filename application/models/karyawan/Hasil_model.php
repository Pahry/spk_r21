<?php 	 
		/**
		 * 
		 */
		class Hasil_model extends CI_Model()
		{
			
			function __construct(argument)
			{
				$this->load->model('karyawan/Nilai_alternatif_model');
				$this->load->model('karyawan/Kriteria_model');
			}
			function hitung($attr)
			{
				$nilai_alternatif = $this->Nilai_alternatif_model->getAll();
				$kriteria = $this->Kriteria_model->getAll();

				$nilai = array();

				foreach ($nilai_alternatif as $n)
				{
					$nn[0] = floatval($n['nilai_c1']);
					$nn[1] = floatval($n['nilai_c2']);
					$nn[2] = floatval($n['nilai_c3']);
					$nn[3] = floatval($n['nilai_c4']);

					$nilai[] = $nn;
				}

				$bobot = array();

				foreach ($kriteria as $k)
				{
					$bobot[] = floatval($k['bobot_kriteria']);
				}

		// Hitung max / min
				$mm = $attr == 'min' ? 1000000 : 0;
				$minMax = array();
				$minMax[] = $mm;
				$minMax[] = $mm;
				$minMax[] = $mm;
				$minMax[] = $mm;

				foreach ($nilai as $n)
				{
					for ($a = 0; $a < count($n); $a++)
					{
						if ($attr == 'min')
						{
							if ($n[$a] < $minMax[$a])
							{
								$minMax[$a] = $n[$a];
							}
						}
						else
						{
							if ($n[$a] > $minMax[$a])
							{
								$minMax[$a] = $n[$a];
							}
						}
					}
				}

				$normalisasi = array();

				for ($a = 0; $a < count($nilai); $a++)
				{
					for ($b = 0; $b < count($nilai[$a]); $b++)
					{
						$normalisasi[$a][$b] = $nilai[$a][$b] / $minMax[$b];
					}
				}

				$hasil = array();

				for ($a = 0; $a < count($normalisasi); $a++)
				{
					$h = 0;

					for ($b = 0; $b < count($normalisasi[$a]); $b++)
					{
						$h += $normalisasi[$a][$b] * $bobot[$b];
					}

					$hs['nilai'] = $h;
					$hs['nama'] = $nilai_alternatif[$a]['nama_alternatif'];
					$hasil[] = $hs;
				}

				$hasilSorted = array();

				while(count($hasil))
				{
					$max = -1;
					$index = -1;

					for ($a = 0; $a < count($hasil); $a++)
					{
						if($hasil[$a]['nilai'] > $max)
						{
							$max = $hasil[$a]['nilai'];
							$index = $a;
						}
					}

					$hasilSorted[] = $hasil[$index];
					unset($hasil[$index]);
					$hasil = array_values($hasil);
				}
		}
?>