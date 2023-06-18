@extends('master')

@section('content')
 <div class="container">
 	<div class="row mt-5">
 		<div class="col-5">
 			<div class="p-3">
 				<form action="{{ route('post#create') }}" method="post">
                    @csrf
 					<div class="text-group mb-3">
 						<label for="">Post Title</label>
 					      <input type="text" name="postTitle" id="" class="form-control" placeholder="Enter Post Title..." required>
 					</div>

 					<div class="text-group mb-3">
 						<label for="">Post Description</label>
 					      <textarea name="postDescription" class="form-control" id="" cols="30" rows="10" placeholder="Enter Post Description..." required></textarea>
 					</div>

 					<div class="mb-3">
 						<input type="submit" value="Create" class="btn btn-danger">
 					</div>




 				</form>
 			</div>
 		</div>
 		<div class="col-7">
 			<div class="data-container">



               <!-- for posts components  -->
               @foreach($posts as $item)
                <div class="post p-3 shadow-sm mb-4">
                    <div class="row">
                        <h5 class="col-7">{{$item['title']}}</h5> &nbsp;

                        <div class="col">
                            <!-- <span class="text-secondary">{{ $item['created_at'] }}</span> -->
                            
                        </div>
                        
                    </div>



                    <p class="text-muted">
                        <!-- pure php writing rule -->
                        <!-- {{substr($item['description'],0,100)}} -->
                        <!-- simple text -->
                        <!-- $item['description'] -->


                        <!-- laravel wrting rule  -->
                         {{ Str::words($item['description'],25,'.......')}}
                    </p>
                    <div class="text-end"> 
                        <button class="btn btn-sm btn-danger"><i class="fa-sharp fa-solid fa-trash"></i> &nbsp;ဖျက်ရန်</button>
                        <button class="btn btn-sm btn-primary"><i class="fa-regular fa-file-lines"></i>&nbsp; အပြည့်အစုံ ဖတ်ရန်</button>
                    </div>
                </div>

               @endforeach

               



            </div>
 		</div>
 	</div>
 </div>
@endsection