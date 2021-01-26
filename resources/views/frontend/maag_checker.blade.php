<form method="post" action="{{ url('/save') }}" >
{!! csrf_field() !!}
<table width="100%" border="0" cellspadding="5" >
@foreach ($questions as $q )
    <tr>
        <td>
            <h3>{{ $q->question }}</h3>
            
            @if ($q->Symptoms)
                <table width="100%" border="1" cellspadding="5" >
                    @php
                        $answers = explode("|", $q->answer);
                       
                    @endphp
                    <tr>
                        <td>
                            Symptom
                        </td>
                        @foreach ($answers as $key => $answer)
                            <td>
                                {{ $answer }}
                            </td>
                        @endforeach
                    </tr>
                    @foreach ($q->Symptoms as $s )
                     <tr>
                        <td>
                            {{ $s->symptom }}
                        </td>
                        @foreach ($answers as $key => $answer)
                            <td>
                                @if ($q->type == 'radio')
                                    <input type="radio" name="radio[{{$s->id}}]" value="{{$answer}}" >
                                @endif
                                @if ($q->type == 'choose')
                                    <input type="radio" name="choose[{{$q->id}}]" value="{{$s->id}}" >
                                @endif   
                            </td>
                        @endforeach
                    </tr>   
                    @endforeach
                    
                </table>
            @endif
           
        </td>
    </tr>
@endforeach

</table>
 <input type="submit" value="Submit">
</form>