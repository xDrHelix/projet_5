<div id="conteneurFiches">
<?php foreach ($fiches as $fiche): ?>
    <article>
        <p>Nom : <?= htmlspecialchars($fiche['nom']) ?></br>
         Sexe : <?= htmlspecialchars($fiche['sexe']) ?></br>
         Race : <?= htmlspecialchars($fiche['race']) ?></br>

        Classe : <?= htmlspecialchars($fiche['classe']) ?></br>
         Métier : <?= htmlspecialchars($fiche['metier']) ?></br>
         Niveau : <?= htmlspecialchars($fiche['niveau']) ?></br>
         Or : <?= htmlspecialchars($fiche['argent']) ?>
        </p></br>
        <form method="get" action="index.php?action=">
            <button type="submit" name="action" value="partagerFiche">Partager cette fiche</button></br>
            <button type="submit" name="action" value="recupFiche">Afficher la fiche</button></br>
            <button type="submit" name="action" value="modifFiche">Modifier ce personnage</button></br>
            <input type="hidden" name="idFiche" value="<?= $fiche['id'] ?>">
            <input type="hidden" name="idUt" value="<?= $fiche['id_utilisateur'] ?>">
            <button type="submit" name="action" value="supprFiche">Supprimer ce personnage</button>
        </form>
    </article>
<?php endforeach; ?>
</div>