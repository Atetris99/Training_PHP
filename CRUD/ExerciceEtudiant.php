<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Gestion des données des étudiants</title>
	<link rel="stylesheet" href="Style.css">
</head>
<body>
	<form action="" method="post">
		<p><label for="nom">Nom</label><br><input type="text" name="nom"></p>
		<p><label for="prenom">Prenom</label><br><input type="text" name="prenom"></p>
		<p><label for="age">Age</label><br><input type="text" name="age"></p>
		<p><label for="Fonction">Fonction</label><br>
			<select name="fonction" id="">
				<option value="">Informaticien</option>
				<option value="">Medecin</option>
				<option value="">Mathematicien</option>
				<option value="">Avocat</option>
				<option value="">Juge</option>
				<option value="">Ingenieur en bâtiment</option>
			</select>
		</p>
		<hr>	
		<div> <input type="submit" name="ok" value="Valider"> <input type="reset" name="annulation" value="Annuler"></div>
	</form>
	<br>
	<!-- Interface utilisateur affichant les données saisies plus haut dans le formulaire-->

	<fieldset>
		<legend>Liste</legend>
		<table>
			<tr><th>N°</th><th>Nom & prenom</th><th>Age</th><th>Fonction</th><th>Action</th></tr>
			<tr><td>1</td><td>YAMBLE Junior</td><td>21</td><td>Informaticien</td><td><button>Delete</button>  <button>Update</button></td></tr>
			<tr><td>2</td><td>TRAORE Grâce</td><td>16</td><td>Medecin</td><td><button>Delete</button>  <button>Update</button></td></tr>
		</table>
	</fieldset>
</body>
</html>