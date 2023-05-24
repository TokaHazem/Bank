<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <h1 class="text-danger text-center " style="margin: 20px auto;">Bank Application</h1>
  <form  method="post" >
        <div class="row">
            <div class="col-3">
            </div>
            <div class="col-6">
            <label for="">Name</label>
            <input type="text" placeholder="Name" class="form-control" name="name" >
            <label for="">Loan</label>
            <input type="number" placeholder=" loan " class="form-control" name="loan" min='1000'>
            <label for="">Years</label>
            <input type="number" placeholder=" years " class="form-control" name="year">
            <br>
            <button class="btn btn-primary">
                Submit
            </button>
            </div>
            <div class="col-3">
            </div>
        </div>  
    </form>
    <?php 
    if($_POST)
    {
        $name=$_POST['name'];
        $loan=$_POST['loan'];
        $year=$_POST['year'];
        if ($year<3)
        {
            $loan+=$loan*0.1;
        }else{
            $loan+=$loan*0.15;
        }
        $mounths=$year*12;
        $monthly_installment = $loan/$mounths;
        echo ' <div class="container"> <div class="row"> <div class="col-12"> <div class="alert alert-primary"> <table class="table table-dark">
      <tbody>
        <tr> <th scope="row">Name</th><td>'.$name.'</td></tr><tr> <th scope="row">Loan</th><td>'.$loan.'</td> 
       </tr><tr> <th scope="row">Years</th><td>'.$year.'</td> 
       </tr><tr> <th scope="row">Monthly Installment</th><td>'. $monthly_installment.'</td></tr>
      </tbody>
    </table>  </div>
          </div>
        </div>
        </div>';
    }
    ?>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>