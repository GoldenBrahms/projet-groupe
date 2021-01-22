<?php 
/* 
    Page contenant la liste de toutes les formations
    issues de la base de données WordPress et se trouvant
    dans la table wp_listeformation
*/
?>
<?php   
    // connexion à la base de donnée
    global $wpdb;
    // récupération des données de la table wp_listeformation contenant les formations
    $formations = $wpdb->get_results($wpdb->prepare('SELECT * FROM wp_listeformation'));
    // si erreur de connexion avec la BDD alors affichage d'une erreur
    $wpdb -> print_error ();
?>

<?php get_header()?>

<div class="main">
    <!-- affichage du nom de la page -->    
    <h1><?php the_title()?></h1>
    <section>
        <div class="header-section">
            <div class="search">    
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Recherche" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Rechercher</button>
                </form>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-primary" type="button" onclick="addFormation()">Ajouter</button>
            </div>
        </div>
        <div class="table">
            <table class="table table-striped table-hover">
                <!-- dénomination des titres du tableau -->
                <thead>
                    <tr>
                        <th>Libellé de la formation</th>
                        <th>Objectifs de la formation</th>
                        <th>Objectifs professionnels de la formation</th>
                        <th>Parcours pédagogique prévisionnel</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <!-- alimentation des lignes du tableau -->   
                <tbody>
                    <?php foreach ($formations as $formation):?>    
                        <tr>
                            <td><?php echo  $formation->NOM_FORMATION ;?></td>
                            <td><?php echo  $formation->OBJ_FORMATION ;?></td>
                            <td><?php echo  $formation->OBJ_PRO_FORMATION;?></td>
                            <td><?php echo  $formation->PARCOUR_PEDA_PREVI;?></td>
                            <td>
                                <span title="Modifier la formation" >
                                    <a href="#" >
                                        <i class="bi bi-pencil-square" ></i>
                                    </a>
                                </span>
                                <span title="Supprimer la formation">
                                    <a href="#">
                                        <i class="bi bi-trash-fill" ></i>
                                    </a>
                                </span>
                            </td>
                        </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </section>
</div>

<script>
    function addFormation() {
        window.location = '../ajouter-une-formation';
    }
</script>