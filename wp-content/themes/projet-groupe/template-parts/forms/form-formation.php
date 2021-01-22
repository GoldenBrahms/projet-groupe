<?php
/*
Template du formulaire d'ajout d'une Formation
*/
?>
<?php
    global $wpdb;
    // récupération des champs
    if ($_POST) {
        $nomFormation       =$_POST['nom_formation'];
        $objFormation       =$_POST['obj_formation'];
        $objProFormation    =$_POST['obj_pro_formation'];
        $parcPedaPrevi      =$_POST['parc_peda_previ'];
        // ajout des données dans la table
        $wpdb->insert('wp_listeformation', 
            array(
                'NOM_FORMATION'         =>$nomFormation,
                'OBJ_FORMATION'         =>$objFormation,
                'OBJ_PRO_FORMATION'     =>$objProFormation,
                'PARCOUR_PEDA_PREVI'    =>$parcPedaPrevi,
            )
        );
        echo "<script>window.location = '" .site_url("/nos-formations")."'</script>";
    }
?>
<?php get_header()?>
<div class="main">
    <h1>Ajouter une formation</h1>
    <form class="row" method="POST">
        <div class="col-md-6">
            <label for="validationServer01" class="form-label">Libellé de la formation</label>
            <input type="text" name="nom_formation" class="form-control" id="validationServer01" required>
            <div class="valid-feedback">
            
            </div>
        </div>
        <div class="col-md-6">
            <label for="validationServer02" class="form-label">Objectifs de la formation</label>
            <input type="text" name="obj_formation" class="form-control" id="validationServer02" required>
            <div class="valid-feedback">
            
            </div>
        </div>
        <div class="col-md-6">
            <label for="validationServer03" class="form-label">Objectifs professionnels de la formation</label>
            <input type="text" name="obj_pro_formation" class="form-control" id="validationServer03" value="" required>
            <div class="valid-feedback">
            
            </div>
        </div>
        <div class="col-md-6">
            <label for="validationServer04" class="form-label">Parcours pédagogique prévisionnel</label>
            <input type="text" name="parc_peda_previ" class="form-control" id="validationServer04" value="" required>
            <div class="valid-feedback">
            
            </div>
        </div>
        <div class="col-md-6">
            <input class="btn btn-primary" type="submit" value="ajouter"></input>
        </div>
    </form>
</div>
    
</div>
<?php get_footer(); ?>