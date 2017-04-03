<h4>Liste d'étudiants inscrits</h4>

<ul class="list-group">
    <?php foreach($results as $inscription) { ?>
        <li class="list-group-item">
            <?php echo $inscription->matricule . ', ' . $inscription->nom; ?>
        </li>
    <?php } ?>
</ul>