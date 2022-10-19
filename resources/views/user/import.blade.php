<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <div class="card mt-3">
                            <div class="card-header">
                                <h4 class="float-start" style="font-weight:700;"></h4>
                               
                            </div>
                            <div class="card-body">
                                <div>
                                    <form action="{{ route('users-import') }}" method="POST" enctype="multipart/form-data">
                                        @csrf

                                       
                                        
                                        <div class="mb-3 col-md-4">
                                            <label class="form-label"></label>
                                            <input type="file" class="form-control-file" name="file" value="" data-provide="typeahead" id="the-basics" placeholder="">
                                        </div>

                                       
                                       
                                        <div class="mb-3 float-end">
                                          
                                            <input type="submit" class="btn btn-success" data-provide="typeahead" id="" value="Import">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>