@include('partials.navbar')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                <div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Data News</h3>
                                    <div class="right mt-3 mb-3">
                                        <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal">Tambah Data News</button>
                                    </div>
								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Category</th>
                                            <th>Author</th>
                                            <th>AKSI</th>
											</tr>
										</thead>
										<tbody>
                                        @foreach($data_news as $news)
                                        <tr>
                                            <td>{{$news->title}}</td>
                                            <td>{{$news->description}}</td>
                                            <td>{{$news->category}}</td>
                                            <td>{{$news->author}}</td>

                                            <td>
                                                <a href="/news/{{$news->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                                                <a href="/news/{{$news->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus ?')">Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach
										</tbody>
									</table>
								</div>
							</div>
                </div>
            </div>
        </div>
    </div>
    @include('partials.footer')
</div>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                    </div>
                    <div class="modal-body">
                        <form action="/news/create" method="POST">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Title">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Description</label>
                                <input name="description" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Description">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Category</label>
                                <input name="category" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="category">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Author</label>
                                <input name="author" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="author">
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    </div>
                 </div>

