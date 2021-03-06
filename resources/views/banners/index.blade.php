
@extends('dashboard.main')
     
@section('container')
</br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>HelSkin Product</h2>
            </div>
            
        </div>
    </div>
</br>

<div class="pull-right">
            <a class="btn btn-success" href="{{ route('banners.create')}}"> Create New Banner</a>
            <h2>Upload 2 gambar saja, bila lebih hapus yang tidak terpakai</h2>
</div>

</br>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Image</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($banner as $banners)
        <tr>
            <td>{{ ++$i }}</td>
            <td><img src="{{asset ('image/banner/'.$banners->image )}}" width="100px"></td>
            <td>
                <form action="{{ route('banners.destroy',$banners->id) }}" method="POST">

                    <a class="btn btn-primary" href="{{ route('products.edit',$banners->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
        
@endsection 