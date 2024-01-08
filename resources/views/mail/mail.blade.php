<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Elite Virtual Specialist</title>
	</head>
    <body>


        <div style="display: flex; height: 100%; background: #f4f4f4;">
            <div style="width: 76%; margin: auto; background: #02202E; padding: 26px; border: 2px solid #E5E8E5; border-radius: 13px;">
                <div style="text-align: center; border-bottom: 1px solid #ccc; padding-bottom: 14px;">
                    <h1 style="margin-top: 10px; color: white;">
                        Elite Virtual Specialist 
                    </h1>
                </div>

                <div style="text-align: center; color: white;">
                    <h3>Sent from Elite Virtual Specialist website contact form</h3>
                </div>

                <div style="font-size: 18px;">
                    <div style="padding-bottom: 8px; color: white;"><span style="padding-left: 13px; font-weight: 600; color: white; ">Name:</span> {{ $contact['name'] }} </div>
                    <div style="padding-bottom: 8px; color: white;"><span style="padding-left: 13px; font-weight: 600; color: white;">E-mail:</span> {{ $contact['email'] }} </div>
                    <div style="padding-bottom: 8px; color: white;"><span style="padding-left: 13px; font-weight: 600; color: white;">Subject:</span> {{ $contact['subject'] }} </div>
                    <div style="padding-bottom: 8px; color: white;"><span style="padding-left: 13px; font-weight: 600; color: white;">Message:</span></div>
                    <p style="padding: 0 7%; color: white;"> {{ $contact['message'] }} </p>
                </div>
            </div>
        </div>


    </body>
</html>