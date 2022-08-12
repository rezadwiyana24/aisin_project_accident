<div class="container-fluid">
    <h3>Create Data</h3>
    <hr>

    <form method="post" action="<?php echo base_url('User/proses_tambah_data'); ?>">
        <table>
            <tr class=" mb-3">
                <label for="id" class="form-label">ID</label>
                <input type="number" class="form-control" Name="id">
            </tr>
            <tr class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" Name="name">
            </tr>
            <tr class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" Name="type">
            </tr>
            <tr class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" Name="description">
            </tr>
            <tr class="mb-3">
                <label for="data_of_incident" class="form-label">Date Of Incident</label>
                <input type="date" class="form-control" Name="date_of_incident">
            </tr>
        </table>
        <br>
        <button type="submit" class="btn btn-primary">Create Data</button>
</div>


</form>