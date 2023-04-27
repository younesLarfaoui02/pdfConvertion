<script>
    
    function remove(id) {
        let get_row = document.querySelector('#tr' + id)
        get_row.parentNode.removeChild(get_row);

    };
    function update_prices(id_modal) {
        var qte = document.querySelector('#qte' + id_modal).value;
        var prix = document.querySelector("#price" + id_modal)
        document.querySelector('#total_ht' + id_modal).value = parseInt(prix.value) * qte;
        document.querySelector('#total_ttc' + id_modal).value = parseInt(prix.value) + parseInt(prix.value) * 20 / 100


    };
    function set_new_price(id_modal) {
        var qte = document.querySelector('#qte' + id_modal).value;
        var prix = document.querySelector("#price" + id_modal)
        document.querySelector('#total_ht' + id_modal).value = parseInt(prix.value) * qte;
        document.querySelector('#total_ttc' + id_modal).value = (parseInt(prix.value) +
            parseInt(prix.value) * 20 / 100) * qte


    };
    function eventlistener(id_modal) {

        var qte = document.querySelector('#tr' + id_modal + " #td2")
        qte.innerHTML = document.querySelector('#qte' + id_modal).value
        var prix = document.querySelector('#tr' + id_modal + " #price")
        prix.innerHTML = document.querySelector("#price" + id_modal).value
        var total_ht = document.querySelector('#tr' + id_modal + " #td3")
        total_ht.innerHTML = document.querySelector('#total_ht' + id_modal).value
        var total_ttc = document.querySelector('#tr' + id_modal + " #td4")
        total_ttc.innerHTML = document.querySelector('#total_ttc' + id_modal).value
        var tbody = $('tbody')
        var table_trs = tbody.children();
        var facture = 0
        $.each(table_trs, function(key, tr) {
            var total_ttc = parseInt(tr.cells[4].innerHTML);
            facture += total_ttc
            console.log(facture)
        })
        $('#reste').val(facture)
    };
    function generateRandomString(length) {
        var result = '';
        var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        var charactersLength = characters.length;
        for (var i = 0; i < length; i++) {
            result += characters.charAt(Math.floor(Math.random() * charactersLength));
        }
        return result;
    };
    $(document).ready(function() {
        $('.update').click(function() {
            alert('chi haja alertiha ....')
            console.log('salam h hh')
        })
        $('#category-select').change(function() {
            var categoryId = $(this).val();
            // Make an AJAX request to get the produits belonging to the selected category
            $.ajax({
                url: 'get-produits-by-category/' +
                    categoryId, // replace with your backend endpoint URL
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    // Clear the produits dropdown and add new options
                    $('#produit-select').empty();
                    $('#produit-select').append($('<option>').text('Select a produit').attr(
                        'value', ''));

                    $.each(data, function(key, value) {
                        $('#produit-select').append($('<option>').text(value
                            .nom_produit).attr('value', value.id));
                    });
                },
                error: function(xhr, status, error) {
                    alert('pb', error)
                }
            });
        });
        $('#produit-select').change(function() {

            var produitId = $(this).val();
            // Make an AJAX request to get the produits belonging to the selected category
            $.ajax({
                url: 'get-produits-info/' + produitId, // replace with your backend endpoint URL
                type: 'GET',
                dataType: 'json',
                success: function(data) {

                    $('#libelle').empty();
                    $('#libelle').val(data.nom_produit);
                    $('#prix').empty();
                    $('#prix').val(data.prix_vente_TTC);
                    $('#total').empty();
                    $('#total').val(data.prix_vente_TTC);
                    $('#qte').val(1)

                },
                error: function(xhr, status, error) {
                    alert('pb', error)
                }
            });
        });
        $('#qte').change(function() {
            var qte = $('#qte').val();
            var prix_ttc = $('#prix_ttc').val();
            var prix_ht = $('#prix_ht').val();
            var prix_ttc = $('#prix_ttc').val();
            $('#total_ht').val((parseInt(qte) * prix_ht).toFixed(2));
            $('#total_ttc').val((parseInt(qte) * prix_ttc).toFixed(2));
        });
        $('#prix').change(function() {
            $('#total').val($(this).val())
            $('#qte').val(1)
            old_qte = 1;
            console.log('salam')
        });
        $('#ajout').click(function() {
            $qte = $('#qte').val()
            $libelle = $('#libelle').val()
            $total_ttc = $('#total_ttc').val()
            $total_ht = $('#total_ht').val()
            var id = generateRandomString(5)

            if ($qte && $total_ht && $total_ttc) {
                $table = $('tbody')
                $table.append(`<tr id='tr${id}'>
                <td id='td1'>${$('#libelle').val()}</td>
                <td id='td2'>${$('#qte').val()}</td>
                <td id='price'>${$('#prix_ht').val()}</td>
                <td id='td3'>${$('#total_ht').val()}</td>
                <td id='td4'>${$('#total_ttc').val()}</td>
                <td>
                    <a href="" title="modifier" data-bs-toggle="modal" data-bs-target="#modal${id}"
                                    class=" btn btn-xs btn-outline btn-success add-tooltip">
                                    <i class="bi bi-pencil-fill"></i>
                    </a>
                    <a href="#" title="Supprimer" onclick="remove('${id}');return false"
                                    class="btn  btn-outline btn-danger ">
                                    <i class="bi bi-trash-fill"></i>
                    </a>
                    <!-- Modal -->
                    <div class="modal fade" id="modal${id}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <div class="form-group">
                                <label for="qte">Qte:</label>
                                <input type="number" class="form-control" onchange="set_new_price('${id}')" id="qte${id}" value=${$('#qte').val()}>
                            </div>
                            <div class="form-group">
                                <label for="qte">Prix:</label>
                                <input type="text" class="form-control" id="price${id}" value=${$('#prix_ht').val()} onchange="update_prices('${id}')">
                            </div>
                            <div class="form-group">
                                <label for="total">Total HT:</label>
                                <input type="number" class="form-control" id="total_ht${id}" readonly value=${$('#total_ht').val()}>
                            </div>
                            <div class="form-group">
                                <label for="total">Total TTC:</label>
                                <input type="number" class="form-control" id="total_ttc${id}" readonly value=${$('#total_ttc').val()}>
                            </div>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                        <button class="btn btn-primary update" id="update" data-bs-dismiss="modal" onclick="eventlistener('${id}')">Update</button>
                        
                        </div>
                    </div>
                    </div>
                    </div>

                </td>

                </tr>

                `


                )
            }

            var tbody = $('tbody')
            var table_trs = tbody.children();
            var facture = 0
            $.each(table_trs, function(key, tr) {
                var total_ttc = parseInt(tr.cells[4].innerHTML);
                facture += total_ttc
            })
            $('#reste').val(facture)
        });
        $('#prix_ht').change(function() {
            var benefice = parseInt($(this).val()) * 20 / 100;
            var ttc = parseInt($(this).val()) + parseInt($(this).val()) * 20 / 100
            $('#prix_ttc').val(ttc);
            $('#total_ht').val($(this).val());
            $('#total_ttc').val(ttc);
            $('#qte').val(1)

        });
        $('#avance').change(function() {
            var avance = $(this).val()
            var tbody = $('tbody')
            var table_trs = tbody.children();
            var facture = 0
            $.each(table_trs, function(key, tr) {
                var total_ttc = parseInt(tr.cells[4].innerHTML);
                facture += total_ttc
            })
            if ($('#avance').val() == '') {
                $('#reste').val(facture)
            }
            else{
            $('#reste').val(facture - parseInt($(this).val()))
            }

        });
        $('#validate').click(function(){
            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
            });
            var libelle = ''
            var quantity = 0
            var prix = 0 
            var total_ht = 0 
            var total_ttc = 0 
            var table = $('tbody')
            var table_rows = table.children()
            $.each(table_rows,function(key,row){
                libelle = row.cells[0].innerHTML
                quantity += parseInt(row.cells[1].innerHTML)
                prix += parseInt(row.cells[2].innerHTML)
                total_ht += parseInt(row.cells[3].innerHTML)   
                total_ttc += parseInt(row.cells[4].innerHTML)   
            })

            const produit_achat = {
                libelle : libelle ,
                quantity : quantity ,
                prix : prix,
                total_ht : total_ht,
                total_ttc : total_ttc
            }
            const reglement_achat = {
             mod_reg : $('#mode_reg').val(),
             avance : $('#avance').val(),
             reste :  $('#reste').val(),
             status : $('#status').val()
            }
            
            
            $.ajax({
                url: '../validate' ,
                type: 'POST',
                dataType: 'json',
                data : {
                    data: produit_achat ,
                    data_reg : reglement_achat
                },
                success : function(data){
                    alert('votre achat est bien ajouter !')
                },
                error : function(error){
                    alert('vous devez inserer tous les informations concernant les achats des produits et le reglement pour avoir valider !')
                }
        });
    })
    });
</script>
