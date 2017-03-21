<?php



function grstrtoupper($string) {
		$latin_check = '/[\x{0030}-\x{007f}]/u';
		if (preg_match($latin_check, $string))
		{
			$string = strtoupper($string);
		}
		$letters  								= array('α', 'β', 'γ', 'δ', 'ε', 'ζ', 'η', 'θ', 'ι', 'κ', 'λ', 'μ', 'ν', 'ξ', 'ο', 'π', 'ρ', 'σ', 'τ', 'υ', 'φ', 'χ', 'ψ', 'ω');
		$letters_accent 						= array('ά', 'έ', 'ή', 'ί', 'ό', 'ύ', 'ώ');
		$letters_upper_accent 					= array('Ά', 'Έ', 'Ή', 'Ί', 'Ό', 'Ύ', 'Ώ');
		$letters_upper_solvents 				= array('ϊ', 'ϋ');
		$letters_other 							= array('ς');
		$letters_to_uppercase					= array('Α', 'Β', 'Γ', 'Δ', 'Ε', 'Ζ', 'Η', 'Θ', 'Ι', 'Κ', 'Λ', 'Μ', 'Ν', 'Ξ', 'Ο', 'Π', 'Ρ', 'Σ', 'Τ', 'Υ', 'Φ', 'Χ', 'Ψ', 'Ω');
		$letters_accent_to_uppercase 			= array('Α', 'Ε', 'Η', 'Ι', 'Ο', 'Υ', 'Ω');
		$letters_upper_accent_to_uppercase 		= array('Α', 'Ε', 'Η', 'Ι', 'Ο', 'Υ', 'Ω');
		$letters_upper_solvents_to_uppercase 	= array('Ι', 'Υ');
		$letters_other_to_uppercase 			= array('Σ');
		$lowercase = array_merge($letters, $letters_accent, $letters_upper_accent, $letters_upper_solvents, $letters_other);
		$uppercase = array_merge($letters_to_uppercase, $letters_accent_to_uppercase, $letters_upper_accent_to_uppercase, $letters_upper_solvents_to_uppercase, $letters_other_to_uppercase);
		$uppecase_string = str_replace($lowercase, $uppercase, $string);
		return $uppecase_string;
}
$afm=$_POST['afm'];
$surname=grstrtoupper($_POST['surname']);
if ($_POST["submit"]) {

			
			
	 	 if (!$afm) {

			 $error="Παρακαλώ πληκτρολογήστε το ΑΦΜ σας";

	 	 } elseif(strlen($afm)!=9 || !is_numeric($afm)){
			$error="Μη έγκυρος ΑΦΜ!!";	 	 	
	 	 }
			
	 	 if (!$surname) {

			 $error.="<br/>Παρακαλώ πληκτρολογήστε το Επώνυμό σας";

	 	 }
			
	 	 
			
	 	 if ($error) {

			 $result='<div class="alert alert-danger"><strong>'.$error.'</div>';

	 	 } else {
	 	 	

			# include parseCSV class.
			require_once('parsecsv.lib.php');
			# create new parseCSV object.
			$csv = new parseCSV();
			# Parse '_books.csv' using automatic delimiter detection...
			$csv->encoding('iso8859-7','UTF-8');
			$csv->conditions = 'afm is '.$afm.' AND surname is '.$surname;
			$csv->auto('ESPA.csv');
			$parsed = $csv->data;
			$afm=$parsed[0][afm];
			if(strlen($afm)<9){
				$afm=
			}
			$surname=$parsed[0][surname];
			$praksi=$parsed[0][praksi];
			if($name==""){
				$result='<div class="alert alert-danger"> H/O συγκεκριμένος Εκπαιδευτικός δεν υπάρχει στην Βάση των Αναπληρωτών Εκπαιδευτικών ΕΣΠΑ/ΠΔΕ </div>';
			}else{

				 $result='<div class="alert alert-success">Η πράξη που ανήκει η/ο Εκπαιδευτικός <strong>'.$surname.' με ΑΦΜ '.$afm.'</strong>, είναι: <strong>'.$praksi.' </strong>
				 <br/> Μπορείτε να κατεβάσετε το παρουσιολόγιο της συγκεκριμένης πράξης <strong> <a href="parousiologia/'.$praksi.'.xls"> εδώ </a> </strong>
				 <br/> Οδηγίες συμπλήρωσης του παρουσιολογίου υπάρχουν <strong> <a href="parousiologia/odigies.doc"> εδώ </a> </strong> </div>';
			}

 	} 



 }

 




?>