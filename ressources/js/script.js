$(document).ready(function () {
    $('#add_client').on('click', function(){
        $('#modal_add_client').modal('show');
    });

    $('#btn_save_client').on('click', function(){
        var donnees = $('#form_add_client').serialize();
        $.ajax({
            url: '../controller/client_ajax.php',
            data: donnees,
            method: "POST",
            success: function(data){
                var result = jQuery.parseJSON(data)
                alert(result.message);
                if(result.error == 0){
                    location.reload();
                }
            },
            error: function(data){
                console.log(data);
                alert("Une erreur est survenue");
            }
        });
    });

    $('#add_vendeur').on('click', function(){
        $('#modal_add_vendeur').modal('show');
    });

    $('#btn_save_vendeur').on('click', function(){
        var donnees = $('#form_add_vendeur').serialize();
        $.ajax({
            url: '../controller/vendeur_ajax.php',
            data: donnees,
            method: "POST",
            success: function(data){
                var result = jQuery.parseJSON(data)
                alert(result.message);
                if(result.error == 0){
                    location.reload();
                }
            },
            error: function(data){
                console.log(data);
                alert("Une erreur est survenue");
            }
        });
    });

    $('#btn_voir_stats').on('click', function(){
        var date_d = $('#date_debut').val();
        var date_f = $('#date_fin').val();

        $.ajax({
            url: '../controller/stats_voiture_ajax.php',
            data: {
                date_d, date_f
            },
            method: "POST",
            success: function(data){
                var result = jQuery.parseJSON(data);
                var ventes = result[0].vente_voiture;
                if (ventes == 1){
                    alert( ventes + " véhicule a été vendu sur cette période.");
                }else{
                    alert( ventes + " véhicules ont été vendu sur cette période.");
                }
            },
            error: function(data){
                console.log(data);
                alert("Une erreur est survenue");
            }
        });
    });

    $('#btn_voir_all_options').on('click', function(){
        var id_mod = $('#choix_mod').val();
        var nom_mod = $('#choix_mod option:selected').text();

        $.ajax({
            url: '../controller/all_options_ajax.php',
            data: {
                id_mod, nom_mod
            },
            method: "POST",
            success: function(data){
                $('#tbody_all_option').empty();
                var result = jQuery.parseJSON(data);
                $('#modal_nom_mod').text(result.nom_mod);
                for(var i = 0; i<result.options.length; i++){
                    $('#tbody_all_option').append(
                        '<tr>'+
                            '<td>'+
                                result.options[i].nom_opt+
                            '</td>'+
                            '<td>'+
                                result.options[i].prix_opt+
                            '€</td>'+
                        '</tr>'
                    );
                }
                $('#modal_all_options').modal('show');
            },
            error: function(data){
                console.log(data);
                alert("Une erreur est survenue");
            }
        });
    });

    $('#kilometrage_moyen').on('click', function(e){
        e.preventDefault();
        $.ajax({
            url: './controller/kilometrage_moyen_ajax.php',
            method: "GET",
            success: function(data){
                var result = jQuery.parseJSON(data);
                alert("Le kilometrage moyen de tout les véhicules de la concession est de " + result[0].kilometrage_moyen +" km.")
            },
            error: function(data){
                console.log(data);
                alert("Une erreur est survenue");
            }
        });
    });

    $('#btn_ajout_option').on('click', function(){
        var id_voit = $('#choix_voiture').val();
        var id_opt = $('#choix_option').val();

        $.ajax({
            url: '../controller/ajout_option_ajax.php',
            data: {
                id_voit, id_opt
            },
            method: "POST",
            success: function(data){
                var result = jQuery.parseJSON(data);
                if(result.error == 1){
                    alert("L'option sélectionnée est déjà équipée sur ce véhicule.");
                }else{
                    alert("L'option a été ajouté et le prix de la commande correspondante à ce véhicule a été mis à jour : "+result.cmd[0].prix_total_cmd+" €");
                }
            },
            error: function(data){
                console.log(data);
                alert("Une erreur est survenue");
            }
        });
    });
});