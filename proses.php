<?php 

class proses{
	
	function __construct(){
		echo "<h1>=> PROGRAM PERHITUNGAN BERATBADAN <=</h1><br>";
	}
	public function hitung($bmi,$jeniskelamin,$tinggibadan,$beratbadan)
	{
		if ($jeniskelamin =="perempuan") {
			if ($bmi < 18) {
				echo "Berat Badan Anda : $beratbadan<br>";
				echo "Tinggi Badan Anda : $tinggibadan<br>";
				echo "Maka BMI Anda : $bmi<br>";
				echo "Maka Anda termasuk pada kategori : ";
				echo "Under Weight/Kurus";
			}
			elseif ($bmi >=18 && $bmi<=25) {
				echo "Berat Badan Anda : $beratbadan<br>";
				echo "Tinggi Badan Anda : $tinggibadan<br>";
				echo "Maka BMI Anda : $bmi<br>";
				echo "Maka Anda termasuk pada kategori : ";
				echo "Normal Weight/Normal";
			}
			elseif ($bmi >=25 && $bmi <=27) {
				echo "Berat Badan Anda : $beratbadan<br>";
				echo "Tinggi Badan Anda : $tinggibadan<br>";
				echo "Maka BMI Anda : $bmi<br>";
				echo "Maka Anda termasuk pada kategori : ";
				echo "Over Weight/kegemukan";
			}
			elseif ($bmi >27) {
				echo "Berat Badan Anda : $beratbadan<br>";
				echo "Tinggi Badan Anda : $tinggibadan<br>";
				echo "Maka BMI Anda : $bmi<br>";
				echo "Maka Anda termasuk pada kategori : ";
				echo "Obesitas";
			}
		}else{
			if ($bmi < 17) {
				echo "Berat Badan Anda : $beratbadan<br>";
				echo "Tinggi Badan Anda : $tinggibadan<br>";
				echo "Maka BMI Anda : $bmi<br>";
				echo "Maka Anda termasuk pada kategori : ";
				echo "Under Weight/Kurus";
			}
			elseif ($bmi >=17 && $bmi <=23) {
				echo "Berat Badan Anda : $beratbadan<br>";
				echo "Tinggi Badan Anda : $tinggibadan<br>";
				echo "Maka BMI Anda : $bmi<br>";
				echo "Maka Anda termasuk pada kategori : ";
				echo "Normal Weight/Normal";
			}
			elseif ($bmi >23 && $bmi <=27) {
				echo "Berat Badan Anda : $beratbadan<br>";
				echo "Tinggi Badan Anda : $tinggibadan<br>";
				echo "Maka BMI Anda : $bmi<br>";
				echo "Maka Anda termasuk pada kategori : ";
				echo "Over Weight/kegemukan";
			}
			elseif ($bmi >27) {
				echo "Berat Badan Anda : $beratbadan<br>";
				echo "Tinggi Badan Anda : $tinggibadan<br>";
				echo "Maka BMI Anda : $bmi<br>";
				echo "Maka Anda termasuk pada kategori : ";
				echo "Obesitas";
			}
		}
	}
}

	$proses = new proses();
	$jeniskelamin = $_POST['jeniskelamin'];
	$tinggibadan = $_POST['tinggibadan'];
	$beratbadan = $_POST['beratbadan'];
	$bmi = $beratbadan/($tinggibadan*$tinggibadan/10000);
	$proses->hitung($bmi, $jeniskelamin,$tinggibadan,$beratbadan);
	
?>