@extends('admin.layout.iindex')
@section('content')
    <h2 style="color: #194e86">symptoms</h2>


    <ul>
        <li>
            <h2>category</h2>
        </li>
        </li>
        <table style=" font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%" class="table-bordered">

            <tr style="background-color: #c4dbef;">

                <td><h3>category</h3></td>
                <td><h3>symptoms</h3></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

            @forelse($symptoms as $symptom)
                <tr style="background-color: #e2e8e5;">
                    <td><h4> {{$symptom->category}}</h4></td>
                    <td><h4>{{$symptom->content_A}}</h4></td>
                    <td><h4>{{$symptom->content_B}}</h4></td>
                    <td><h4>{{$symptom->content_C}}</h4></td>
                    <td><h4>{{$symptom->content_D}}</h4></td>
                    <td><h4>{{$symptom->content_E}}</h4></td>
                    <td><h4>{{$symptom->content_F}}</h4></td>
                    <td><h4>{{$symptom->content_G}}</h4></td>
                    <td><h4>{{$symptom->content_H}}</h4></td>
                    <td><h4>{{$symptom->content_I}}</h4></td>
                    <td><h4>{{$symptom->content_J}}</h4></td>

                    <td>
                        <br>
                        <form action="{{route('symptoms.destroy',$symptom->id)}}" method="post">
                            {{csrf_field()}}
                            {{method_field('delete')}}
                            <input class="btn btn-sm btn-danger" type="submit" value="delete"/>

                        </form>
                    </td>
                </tr>
            @empty
                <h3>no data</h3>
            @endforelse
            @endsection
        </table>











        $form=$request->all('image');
        $this->validate($request,[
        'name'=>'required',
        'image'=>'required|mimes:jpg,jpeg,png|max:1000'

        ]);

        $img=$request->image;
        if($img){
        $image_name=$img->getClientOriginalName();
        $img->move('images',$image_name);
        $form['image']=$image_name;
        }
        category::create($form);








        <td >
            <form action="{{route('category.edit',$categories->id)}}" method="post">
                {{csrf_field()}}
                {{method_field('edit')}}
                <input class="btn btn-sm btn-primary" type="submit" value="edit"/>

            </form>
        </td>



        $c=0;
        $data = Array();
        foreach ($adv as $ad)
        {
        $data[$ad->id]=[$ad->image];
        $c++;
        }

        foreach(array_reverse($data) as $item)


        for ($i=$c; $i>=$c-3; $i--)
        {
        $data[$i]=[$ad->id];
        }
        return $data[$i];



        <a href="{{url('no',['id'=>$sy->id])}}">لا</a>


        $adv[]=$advertise->image;
        foreach ($adv as $ad)
        {

        }



