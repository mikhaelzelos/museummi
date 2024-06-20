
     <?php $__env->startSection('container'); ?>


            <div class="col-md-10 p-5 pt-2">
                <h3 class="dashboard" style="margin-left: 1%; margin-top: 2%;">Piringan Hitam</h3><hr class="border border-dark border-1 opacity-30">
<div class="container-lg">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Data Piringan Hitam</h2></div>
                    <div class="col-sm-4">
                        <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button>
                    </div>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nomor Regist</th>
                        <th>Penyumbang</th>
                        <th>Tgl Masuk</th>
                        <th>Cover</th>
                        <th>Lagu</th>
                        <th>Deskripsi</th>
                        <th>Rak</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>001</td>
                        <td>Mandiri Abadi</td>
                        <td>01-05-2022</td>
                        <td>-</td>
                        <td>-</td>
                        <td>Deskripsi</td>
                        <td>2</td>
                        <td>
                            <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>001</td>
                      <td>Mandiri Abadi</td>
                      <td>01-05-2022</td>
                      <td>-</td>
                      <td>-</td>
                      <td>Deskripsi</td>
                      <td>1</td>
                      <td>
                            <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>001</td>
                      <td>Mandiri Abadi</td>
                      <td>01-05-2022</td>
                      <td>-</td>
                      <td>-</td>
                      <td>Deskripsi</td>
                      <td>1</td>
                      <td>
                            <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>      
                </tbody>
            </table>
        </div>
    </div>
</div>     

<script>
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
	var actions = $("table td:last-child").html();
	// Append table with add row form on add new button click
    $(".add-new").click(function(){
		$(this).attr("disabled", "disabled");
		var index = $("table tbody tr:last-child").index();
        var row = '<tr>' +
            '<td><input type="text" class="form-control" name="no" id="no"></td>' +
            '<td><input type="text" class="form-control" name="no_regist" id="no_regist"></td>' +
            '<td><input type="text" class="form-control" name="nama_instrument" id="nama_instrumen"></td>' +
            '<td><input type="text" class="form-control" name="daerah" id="daerah"></td>' +
            '<td><input type="text" class="form-control" name="nama_penyumbang" id="nama_penyumbang"></td>' +
            '<td><input type="text" class="form-control" name="quantity" id="quantity"></td>' +
            '<td><input type="text" class="form-control" name="deskripsi" id="deskripsi"></td>' +
            '<td><input type="text" class="form-control" name="rak" id="rak"></td>' +
			'<td>' + actions + '</td>' +
        '</tr>';
    	$("table").append(row);		
		$("table tbody tr").eq(index + 1).find(".add, .edit").toggle();
        $('[data-toggle="tooltip"]').tooltip();
    });
	// Add row on add button click
	$(document).on("click", ".add", function(){
		var empty = false;
		var input = $(this).parents("tr").find('input[type="text"]');
        input.each(function(){
			if(!$(this).val()){
				$(this).addClass("error");
				empty = true;
			} else{
                $(this).removeClass("error");
            }
		});
		$(this).parents("tr").find(".error").first().focus();
		if(!empty){
			input.each(function(){
				$(this).parent("td").html($(this).val());
			});			
			$(this).parents("tr").find(".add, .edit").toggle();
			$(".add-new").removeAttr("disabled");
		}		
    });
	// Edit row on edit button click
	$(document).on("click", ".edit", function(){		
        $(this).parents("tr").find("td:not(:last-child)").each(function(){
			$(this).html('<input type="text" class="form-control" value="' + $(this).text() + '">');
		});		
		$(this).parents("tr").find(".add, .edit").toggle();
		$(".add-new").attr("disabled", "disabled");
    });
	// Delete row on delete button click
	$(document).on("click", ".delete", function(){
        $(this).parents("tr").remove();
		$(".add-new").removeAttr("disabled");
    });
});
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\meseum\resources\views/piringanhitam.blade.php ENDPATH**/ ?>