@include('partials.navbar')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
            <div class="col-md-12">
            <div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Edit</h3>
								</div>
								<div class="panel-body">
                                <form action="/news/{{$news->id}}/update" method="POST">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Title" value="{{$news->title}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Description</label>
                                <input name="description" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Description" value="{{$news->description}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Category</label>
                                <input name="category" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="category" value="{{$news->category}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Author</label>
                                <input name="author" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="author" value="{{$news->author}}">
                            </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-warning">Update</button>
                            </form>
                                           <a href="/news" class="button">Back</a>
            </div>
          </div>
        </div>
    </div>
</div>
@include('partials.footer')




