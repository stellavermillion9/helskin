
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
            <a class="btn btn-success" href="{{ route('testi.create')}}"> Create New Testimoni</a>
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
            <th>Name</th>
            <th>Description</th>
            <th>Image</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($testi as $t)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $t->name }}</td>
            <td>{{ $t->description }}</td>
            <td><img src="{{asset ('image/testi/'.$t->image )}}" width="100px"></td>
            <td>
                <form action="{{ route('testi.destroy',$t->id) }}" method="POST">

                    <a class="btn btn-primary" href="{{ route('testi.edit',$t->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    {!! $testi->links() !!}
        
@endsection 