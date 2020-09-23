<p>Hi, This is : {{ $maildata['name'] }}</p>
<p>My  EmailMail Adress is  : {{ $maildata['email'] }}</p>
<p>I have some query like  : {{ $maildata['message'] }}.</p>
<p>It would be appriciative, if you gone through this feedback.Just give me a Call.</p>
<img src= "{{$message->embed(storage_path('app/'. $maildata['image'])) }}" width= "400"/>