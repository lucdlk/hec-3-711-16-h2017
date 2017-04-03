<br>
<h3>Liste des abonnés</h3>
<table class="table table-bordered">
    <tr>
        <th>Prénom</th>
        <th>Nom de famille</th>
        <th>Numéro de téléphone</th>
        <th>Adresse</th>
    </tr>
    <?php foreach($results as $member) { ?>
        <tr>
            <td><?php echo $member->given_name; ?></td>
            <td><?php echo $member->family_name; ?></td>
            <td><?php echo $member->contact_phone_number; ?></td>
            <td><?php echo $member->address; ?></td>
        </tr>
    <?php } ?>
</table>