<script>
    document.getElementById('Test_center').className="active";
</script>
<style>
    #base{
        height:200vh;
    }
    table{
        position:relative;
        top:200px;
        left:400px;
        margin-top:0;
    }
    table, th, td {
        text-align:center;
        border-collapse:collapse;
        font-family: sans-serif;
    }
    td{
        height:40px;
        padding-left:40px;
        padding-right:40px;
    }
    tr:nth-child(odd) {
        background-color: rgba(129, 182, 243,0.5);

    }
    tr:nth-child(even) {
        background-color: rgb(123, 168, 228);
    }
    th{
        background-color:rgb(0, 83, 179);
        color:white;
        height:30px;
    }
    #edit, #delete{
        border:none;
        background-color:white;
        padding:8px;

    }
    #edit{
        padding-left:12px;
    }
    a{
        text-decoration:none;
        color:black;
    }
    #add{
        position:relative;
        top:200px;
        left:330px;
        margin:0;
        padding:0;
    }
    </style>
 <div id="base">
    <a href=<?php echo URL."test_centers/addTest_center"; ?> id="add"> <img src="../public/img/add.ico" title="add" alt="add"> </a>
        <table>
            <thead style="background-color: #ddd; font-weight: bold;">
               <tr>
                   <th id="test_center_name">Test Center Name</th>
                   <th id="test_center_admin_name">Test Center Admin Name</th>
               </tr>
            </thead>
            <tbody>
                   <?php foreach($test_centers as $test_center) { ?>
                <tr>
                    <td> <?php echo $test_center->center_name; ?> </td>
                    <td> <?php echo $test_centerAdmins[$test_center->user_id]; ?> </td>
                <td id="edit"><a href=<?php echo URL."test_centers/editTest_center/".$test_center->id; ?> > <img src="../public/img/edit.ico" title="edit" alt="edit"> </a> </td>
                <td id="delete"><a href=<?php echo URL."test_centers/confirmTest_centerDelete/".$test_center->id; ?> > <img src="../public/img/delete.ico" title="delete" alt="delete"> </a> </td>
                </tr>
                <?php }  ?>
            </tbody>
        </table>
  
</div>
