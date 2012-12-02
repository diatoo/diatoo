<?php 
include('./includes/fonctions/fonction.php');
if(!empty($_POST)) {
	// recupreation des valeurs postées 
	$sCivilite = getValue('civilite');
	$sNom = strtoupper(getValue('nom'));
	$sPrenom = ucfirst(getValue('prenom'));
	$sTel= getValue('telephone');
	$sEmail = getValue('email');
	$sSujet = getValue('sujet');
	$sMessage= getValue('message');
	
	$sErreur = '';
	if(!verifFormatTel($sTel)) {
		$sErreur .= 'Verifier, votre numero de telephone SVP !!! <br/>';
	}
	if(!verifFormatEmail($sEmail)) {
		$sErreur .= 'Verifier, votre email SVP !!! <br/>';
	}
	if($sNom == '' || $sTel == '' || $sEmail == '' || $sMessage == '') {
		$sErreur .= 'Merci, de remplir les champs obligatoire <br/>';
	}
	//die('erreur'.$sErreur);
	if($sErreur == '') {
		$sFrom = $sEmail;
		$sDestinataire = 'elmn64@yahoo.fr';
		$sMail = $sCivilite.' '.$sNom.' '.$sPrenom.' a écrit <br/> ';
		$sMail .= $sMessage;
		echo $sMail;
		die('ok');
		header('Location: merciContact.php');
	}
}
?>
<div id='divContactForm'>
	<form method='POST' action='<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES); ?>' id='form_contact' class='formulaire'  >
		<fieldset id='contactFS'>
			<legend ALIGN=CENTER>Formulaire de contact</legend>
			<?php if(isset($sErreur) && $sErreur != '') { echo '<span style=color:red; border;>'.$sErreur.'</span>' ;}?>
			<table>
				<tr><td>Civilite:</td>
					<td>
						<select id='select_civilite' name='civilite'>
							<option <?php echo (isset($_POST['civilite']) && $_POST['civilite'] != '' && $_POST['civilite'] == 'M.' ? 'selected=selected':'')?> >M.</option>
							<option <?php echo (isset($_POST['civilite']) && $_POST['civilite'] != '' && $_POST['civilite'] == 'Mme' ? 'selected=selected':'')?> >Mme</option>
							<option <?php echo (isset($_POST['civilite']) && $_POST['civilite'] != '' && $_POST['civilite'] == 'Mlle' ? 'selected=selected':'')?> >Mlle</option>
						</select>
					</td>
				</tr>
				<tr><td>Nom <span class='required'>*</span>:</td>
					<td><input type='text' name='nom' size=30 value="<?php echo valueField('nom');?>"></td>
				</tr>
				<tr><td>Prenom:</td>
					<td><input type='text' name='prenom' size=30 value='<?php echo valueField('prenom');?>'></td>
				</tr>
				<tr><td>Telephone <span class='required'>*</span>:</td>
					<td><input type='text' name='telephone' size=30 value='<?php echo valueField('telephone');?>'></td>
				</tr>
				<tr><td>Email <span class='required'>*</span>:</td>
					<td><input type='text' name='email' size=30 value='<?php echo valueField('email');?>'></td></tr>
				<tr><td>Sujet:</td>
					<td><input type='text' name='sujet' size=30 value='<?php echo valueField('sujet');?>'></td></tr>
				<tr><td colspan=2>Message <span class='required'>*</span>:<br>
				  <textarea COLS=50 ROWS=6 name='message' ><?php echo valueField('message');?></textarea>
				</td></tr>
			</table>
			<br> 
			<div class='divBtnFormulaire'>
				<input type='submit' value='Envoyer'> 
				 <input type='reset' value='Annuler'>
			</div>
		</fieldset>
	</form>	
</div>