<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body style="margin: 0; padding: 0;">
        <div style="background-color: #eeeeef; padding: 50px 0;">
            <table style="max-width: 640px;" border="0" cellspacing="0" cellpadding="0" align="center">
                <tbody>
                    <tr>
                        <td align="center" valign="top"><!-- Header -->
                            <table id="template_header" border="0" width="100%" cellspacing="0" cellpadding="0">
                                <tbody>
                                    <tr>
                                        <td>
                                            <h1 id="logo" style="padding: 28px 24px; display: block; font-family: Arial; font-size: 30px; font-weight: bold; text-align: center; line-height: 150%;">New Meeting Created</h1>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" valign="top"><!-- Body -->
                            <table id="template_body" border="0" width="100%" cellspacing="0" cellpadding="0">
                                <tbody>
                                    <tr>
                                        <td id="mailtpl_body_bg" style="background-color: #fafafa;" valign="top"><!-- Content -->
                                            <table border="0" width="100%" cellspacing="0" cellpadding="20">
                                                <tbody>
                                                    <tr>
                                                        <td valign="top">Hello {{user_name}}

                                                            New meeting is created by {{employer_name}} in this job "{{job_title}}".

                                                            <table class="blueTable">
                                                                <thead>
                                                                    <tr>
                                                                        <th style="text-align: center;" colspan="2">Meeting Information</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>job title</td>
                                                                        <td>{{job_title}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Employer name</td>
                                                                        <td>{{employer_name}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>date</td>
                                                                        <td>{{date}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>time date</td>
                                                                        <td>{{time}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>time duration</td>
                                                                        <td>{{time_duration}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>message</td>
                                                                        <td>{{message}}</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" valign="top">
                            <table id="template_footer" style="border-top: 1px solid #E2E2E2; background: #eee; -webkit-border-radius: 0px 0px 6px 6px; -o-border-radius: 0px 0px 6px 6px; -moz-border-radius: 0px 0px 6px 6px; border-radius: 0px 0px 6px 6px;" border="0" width="100%" cellspacing="0" cellpadding="10">
                                <tbody>
                                    <tr>
                                        <td valign="top">
                                            <table border="0" width="100%" cellspacing="0" cellpadding="10">
                                                <tbody>
                                                    <tr>
                                                        <td id="credit" style="border: 0; color: #777; font-family: Arial; font-size: 12px; line-height: 125%; text-align: center;" colspan="2" valign="middle"><a href="{{website_url}}">{{website_name}}</a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html>