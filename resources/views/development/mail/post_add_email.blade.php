
@include('mail.email_header')
<tr>
    <td>
        Dear {{$name}}, <br>
        Congratulations!
        <p>  {{\URL::to('/edit',['refferal_id'=>$code])}}      </p>

        Keep yourself pumped up for exciting prizes on your way! Good luck. <br><br>

    </td>
</tr>

@include('mail.email_footer')