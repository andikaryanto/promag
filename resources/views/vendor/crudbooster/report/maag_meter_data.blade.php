@if(Request::input('fileformat') == 'pdf')
    <h3>{{Request::input('filename')}}</h3>
@endif
<table border='1' width='100%' cellpadding='3' cellspacing="0" style='border-collapse: collapse;font-size:12px'>
    <thead>
    <tr>
        <?php
        foreach ($columns as $col) {

            if (Request::get('columns')) {
                if (! in_array($col['name'], Request::get('columns'))) {
                    continue;
                }
            }
            $colname = $col['label'];
            echo "<th style='background:#eeeeee'>$colname</th>";
        }
        ?>
    </tr>
    </thead>
    <tbody>
  
    @if(count($result)==0)
        <tr class='warning'>
            <td colspan='{{count($columns)+1}}' align="center">No Data Avaliable</td>
        </tr>
    @else
        @foreach($result as $row)
            <tr>
                <?php
               
                foreach ($columns as $col) {

                    if (Request::get('columns')) {
                        if (! in_array($col['name'], Request::get('columns'))) {
                            continue;
                        }
                    }

                    $value = @$row->{$col['field']};
                    $title = @$row->{$title_field};

                    {

                        
                        if($col['field'] == 'symptom'){
                             $gejala_ids = explode("|",$value);

                            $data =[];
                            foreach($gejala_ids as $key => $id){
                                $gejala = \App\Symptom::find($id);
                                $data[] = $gejala->symptom;
                                
                            }
                            $value_data = implode("|",$data);
                        }elseif($col['field'] == 'symptomtime'){
                             $gejala_ids = explode("|",$value);

                            $data =[];
                            foreach($gejala_ids as $key => $id){
                                $gejala = \App\Symptom::find($id);
                                $data[] = $gejala->symptom;
                                
                            }
                            $value_data = implode("|",$data);
                        }else{
                            $value_data = $value;
                        }
                       
                        
                        echo "<td>".$value_data."</td>";
                    }
                }
                ?>
            </tr>
        @endforeach
    @endif
    </tbody>
</table>
<script type="text/php">
    if ( isset($pdf) ) {
        $font = Font_Metrics::get_font("helvetica", "bold");
        $pdf->page_text(36, 18, "Page {PAGE_NUM} of {PAGE_COUNT}", $font, 6, array(0,0,0));
    }

</script>