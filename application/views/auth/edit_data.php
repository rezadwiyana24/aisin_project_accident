<div class="container-fluid">
    <h3>Edit Data</h3>
    <hr>

    <form method="post" action="<?php echo base_url('User/proses_edit_data'); ?>">
        <input type="hidden" name="id" value="<?php echo $data_accident['id']; ?>">

        <table>
            <tr class=" mb-3">
                <label for="id" class="form-label">ID</label>
                <input type="number" class="form-control" Name="id" required="" value="<?php echo $data_accident['id']; ?>">
            </tr>
            <tr class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" Name="name" required="" value="<?php echo $data_accident['name']; ?>">
            </tr>
            <tr class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" Name="type" required="" value="<?php echo $data_accident['type']; ?>">
            </tr>
            <tr class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" Name="description" required="" value="<?php echo $data_accident['description']; ?>">
            </tr>
            <tr class="mb-3">
                <label for="data_of_incident" class="form-label">Date Of Incident</label>
                <input type="date" class="form-control" Name="date_of_incident" required="" value="<?php echo $data_accident['date_of_incident']; ?>">
            </tr>
        </table>
        <br>
        <button type="submit" class="btn btn-primary">Edit Data</button>
</div>


</form>