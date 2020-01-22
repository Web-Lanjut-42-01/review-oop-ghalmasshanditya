<!DOCTYPE html>
<html>
<head>
	<title>FORM Berat Badan</title>
</head>
<body>
	<h2>FORM INPUT</h2>
	<form action="proses.php" method="POST">
		<table>
			<tr>
				<td>
					Jenis Kelamin 
				</td>
				<td>
					 : <select name="jeniskelamin" required="">
                        <option value="Laki - Laki">Laki - Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
				</td>
			</tr>
			<tr>
				<td>
					Tinggi Badan 
				</td>
				<td>
					 : <input type="number" name="tinggibadan" placeholder="Tinggi Badan..." required=""> Cm
				</td>
			</tr>
			<tr>
				<td>
					Berat Badan
				</td>
				<td>
					 : <input type="number" name="beratbadan" placeholder="Berat Badan..." required=""> Kg
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="submit">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>