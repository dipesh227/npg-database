<script>
    $(document).ready(function() {
        $('#pfmsawash').DataTable();
    });
</script>
<table class="table table-hover table-bordered" id="pfmsawash">
    <thead>
        <tr>
            <th>id</th>
            <th>Beneficiary Code</th>
            <th>Name</th>
            <th>Account No</th>
            <th>Bank Name</th>
            <th>IFSC Code</th>
            <th>Date of freez by ULB</th>
            <th>Flag</th>
            <th>Edit</th>
            <th>Detials</th>
        </tr>
    </thead>
    <tbody id="pfmstablebody">
        <?php $id = 1;
        foreach ($awash as $awasdata) {
            echo $output = '<tr>';
            echo $output = "<td>$id</td>";
            echo $output = "<td>$awasdata->Beneficiary_Code</td>";
            echo $output = "<td>$awasdata->Name</td>";
            echo $output = "<td>$awasdata->Account_No</td>";
            echo $output = "<td>$awasdata->Bank_Name</td>";
            echo $output = "<td>$awasdata->IFSC_Code</td>";
            echo $output = "<td>$awasdata->Date_of_freez_by_ULB</td>";
            echo $output = "<td>$awasdata->Flag</td>";
            echo $output = "<td><a href='' class='btn btn-danger'>Edit</a></td>";
            echo $output = "<td><a href='' class='btn btn-warning'>Detials</a></td>";
            echo $output = '</tr>';
            ++$id;
        }
        ?>
    </tbody>
</table>