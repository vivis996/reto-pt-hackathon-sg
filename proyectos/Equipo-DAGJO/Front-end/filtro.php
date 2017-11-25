<link rel="stylesheet" href="estilo.css">
<link rel="stylesheet" href="css/estilof.css">

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="input-group" id="adv-search">
                <input type="text" class="form-control" placeholder="Search for snippets" />
                <div class="input-group-btn">
                    <div class="btn-group" role="group">
                        <div class="dropdown dropdown-lg">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></button>
                            <div class="dropdown-menu dropdown-menu-right" role="menu">
                                <form class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <label for="filter">Filtro</label>
                                        <select class="form-control">
                                            <option value="0" selected>Todos</option>
                                            <option value="1">Ubicación</option>
                                            <option value="2">Mas populares</option>
                                            <option value="3">Top Ranking</option>
                                            <option value="4">Mas comentados</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="contain">Buscador</label>
                                        <input class="form-control" type="text" />
                                    </div>
                                    <div class="form-group">
                                        <label for="contain">Escribir</label>
                                        <input class="form-control" type="text" />
                                    </div>
                                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                                </form>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>