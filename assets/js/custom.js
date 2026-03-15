$(document).ready(function() {

    $('.match-height').matchHeight();
    $('.home-blog .title').matchHeight();

    var downloadpdf = BASE_URL + '/assets/pdf/';

    /*END PRELOADER JS*/
    $.validate({
        form: '#contactForm',
        ignore: [],
        validateHiddenInputs: true,
        onSuccess: function($form) {
            leadhome('contactForm', 'A new lead from  Imperiumapp.', 'Please login to IMK Platform to follow-up.', 'Contact', 'contact-message');
            return false;
        },
    });

    $.validate({
        form: '#newsletterForm',
        ignore: [],
        validateHiddenInputs: true,
        onSuccess: function($form) {
            leadhome('newsletterForm', 'A new lead from  Imperiumapp .', 'Please login to IMK Platform to follow-up.', 'Newsletter', 'news-message');
            return false;
        },
    });

    $.validate({
        form: '#contactForm',
        ignore: [],
        validateHiddenInputs: true,
        onSuccess: function($form) {
            leadhome('contactForm', 'A new lead from  Imperiumapp .', 'Please login to IMK Platform to follow-up.', 'Contact', 'contact-message');
            return false;
        },
    });

    $.validate({
        form: '#leadForm',
        ignore: [],
        validateHiddenInputs: true,
        onSuccess: function($form) {
            leadhome('contactForm', 'A new lead from  Imperiumapp .', 'Please login to IMK Platform to follow-up.', 'ContactAgent', 'leadForm-message');
            return false;
        },
    });

    $.validate({
        form: '#downlaodBrochureForm',
        ignore: [],
        validateHiddenInputs: true,
        onSuccess: function($form) {
            leadhome('downlaodBrochureForm', 'A new lead from  Imperiumapp .', 'Please login to IMK Platform to follow-up.', 'downlaodBrochureForm', 'downlaodBrochureForm-message');
            return false;
        },
    });

    $.validate({
        form: '#downlaodBrochurecrm',
        ignore: [],
        validateHiddenInputs: true,
        onSuccess: function($form) {
            leadhome('downlaodBrochurecrm', 'A new lead from Imperiumapp .', 'Please login to IMK Platform to follow-up.', 'DownlaodBrochure', 'brochure-message');
            var link = document.createElement('a');
            link.href = downloadpdf + 'Imperium_CRM_Connect.pdf';
            link.download = downloadpdf + 'Imperium_CRM_Connect.pdf';
            link.dispatchEvent(new MouseEvent('click'));
            return false;
        },
    });
    $.validate({
        form: '#downlaodBrochurecrmAbout',
        ignore: [],
        validateHiddenInputs: true,
        onSuccess: function($form) {
            leadhome('downlaodBrochurecrmAbout', 'A new lead from Imperiumapp .', 'Please login to IMK Platform to follow-up.', 'DownlaodBrochureAbout', 'brochure-message');
            var link = document.createElement('a');
            link.href = downloadpdf + 'Imperium_Corporate_Profile_2018_Latest.pdf';
            link.download = downloadpdf + 'Imperium_Corporate_Profile_2018_Latest.pdf';
            link.dispatchEvent(new MouseEvent('click'));
            return false;
        },
    });


    $.validate({
        form: '#downlaodBrochurecrmCallBack',
        ignore: [],
        validateHiddenInputs: true,
        onSuccess: function($form) {
            leadhome('downlaodBrochurecrmCallBack', 'A new lead from Imperiumapp .', 'Please login to IMK Platform to follow-up.', 'DownlaodBrochure', 'brochure-message');
            var link = document.createElement('a');
            link.href = downloadpdf + 'CallBack_Assist_Module_2018.pdf';
            link.download = downloadpdf + 'CallBack_Assist_Module_2018.pdf';
            link.dispatchEvent(new MouseEvent('click'));
            return false;
        },
    });


    $.validate({
        form: '#downlaodBrochurecrmToll_Fraud',
        ignore: [],
        validateHiddenInputs: true,
        onSuccess: function($form) {
            leadhome('downlaodBrochurecrmToll_Fraud', 'A new lead from Imperiumapp .', 'Please login to IMK Platform to follow-up.', 'DownlaodBrochure', 'brochure-message');
            var link = document.createElement('a');
            link.href = downloadpdf + 'Imperium_CMS_Toll_Fraud.pdf';
            link.download = downloadpdf + 'Imperium_CMS_Toll_Fraud.pdf';
            link.dispatchEvent(new MouseEvent('click'));
            return false;
        },
    });


    $.validate({
        form: '#downlaodBrochureFormInaipi',
        ignore: [],
        validateHiddenInputs: true,
        onSuccess: function($form) {
            leadhome('downlaodBrochureFormInaipi', 'A new lead from Imperiumapp .', 'Please login to IMK Platform to follow-up.', 'DownlaodBrochure', 'brochure-message');
            var link = document.createElement('a');
            link.href = downloadpdf + 'INAIPI_Click_to_Call.pdf';
            link.download = downloadpdf + 'INAIPI_Click_to_Call.pdf';
            link.dispatchEvent(new MouseEvent('click'));
            return false;
        },
    });

    $.validate({
        form: '#downloadBrochure',
        ignore: [],
        validateHiddenInputs: true,
        onSuccess: function($form) {
            downloadBrochure('downloadBrochure', 'A new lead from  Imperiumapp .', 'Please login to IMK Platform to follow-up.', 'downlaodBrochureForm', 'brochure-message');
            return false;
        },
    })

    function AfterSuccess(alertMsg, formId) {

    }


    function leadhome(formId, subject, message, type, alertMsg) {
         $('input[type="submit"]').attr('disabled','disabled');
        var leadData;
        leadData = objectifyForm($("#" + formId).serializeArray());
        if (leadData.contactNumber) {
            leadData.contactNumber = leadData.contactNumber.replace(/[-() ]+/g, "");
            leadData.contactNumber = leadData.contactNumber;
        }
        $("#" + alertMsg).addClass('alert-success');
        $("#" + formId + " .theme-btn").prop('disabled', true);
        console.log("leadData", leadData);
        var apiKey = "1mper1umapp2023";
        $.ajax({
            //url: 'https://inaipi.ae/imperiumapp/email.php',
           // https://mycloudcx.com/imperiumapp/email.php
             url: 'https://inaipi.ae/imperiumapp/email.php',
            type: "POST",
             headers: {
                "X-Auth-Key": apiKey
            },
            contentType: 'application/x-www-form-urlencoded',
            crossDomain: true,
            data: { meta: leadData, subject: subject, message: message },


            success: function(res) {
                console.log(res, 'response');
//alert(res);
                $("#" + formId + " .theme-btn").prop('disabled', false);
                $('input[type="submit"]').removeAttr('disabled');
               if(res == 'Email sent successfully!'){
                   console.log(res, 'result');
                    $("#" + formId)[0].reset();
                    $("#" + alertMsg).removeClass('hidden');
                    $("#" + alertMsg).addClass('alert-success');
                    $("#" + alertMsg).html('Successfully Submitted');
                //console.log(res, 'response');
                }else{
                    $("#" + formId)[0].reset();
                    $("#" + alertMsg).removeClass('hidden');
                    $("#" + alertMsg).addClass('alert-warning');
                    $("#" + alertMsg).html(res);
                }

                if (res) {
                    if (formId == 'downlaodBrochurecrm') {
                        //window.location.href = downloadpdf + 'Imperium_CRM_Connect.pdf';
                        download(downloadpdf + downloadpdf + 'Imperium_CRM_Connect.pdf' ,"Imperium_CRM_Connect");
                        // AfterSuccess(alertMsg, formId);
                    }
                    if (formId == 'downlaodBrochurecrmCallBack') {
                        //window.location.href = downloadpdf + 'CallBack_Assist_Module_2018.pdf';
                        download(downloadpdf + downloadpdf + 'CallBack_Assist_Module_2018.pdf' ,"CallBack_Assist_Module_2018");
                        AfterSuccess(alertMsg, formId);
                    }
                    if (formId == 'downlaodBrochurecrmToll_Fraud') {
                        //window.location.href = downloadpdf + 'Imperium_CMS_Toll_Fraud.pdf';
                        download(downloadpdf + downloadpdf + 'Imperium_CMS_Toll_Fraud.pdf' ,"Imperium_CMS_Toll_Fraud");
                        AfterSuccess(alertMsg, formId);
                    }
                    if (formId == 'downlaodBrochureFormInaipi') {
                        //window.location.href = downloadpdf + 'INAIPI_Click_to_Call.pdf';
                        download(downloadpdf + downloadpdf + 'INAIPI_Click_to_Call.pdf' ,"INAIPI_Click_to_Call");
                        AfterSuccess(alertMsg, formId);
                    }

                    if (alertMsg) {
                        AfterSuccess(alertMsg, formId);
                    }

                } else {
                    $("#" + formId)[0].reset();
                    $("#" + alertMsg).removeClass('hidden');
                    $("#" + alertMsg).addClass('alert-warning');
                    $("#" + alertMsg).html('Something goes wrong, please try again.');
                }
            },



            error: function(err) {
                console.log(err, 'error');
                $("#" + formId)[0].reset();
                $("#" + alertMsg).removeClass('hidden');
                $("#" + alertMsg).addClass('alert-warning');
                $("#" + alertMsg).html('Something goes wrong, please try again.');
            },
        });
        return false;
    }

    function downloadBrochure(formId, subject, message, type, alertMsg) {
        var leadData;
        var pdfFile = "";
        leadData = objectifyForm($("#" + formId).serializeArray());

        if (leadData.contactNumber) {
            leadData.contactNumber = leadData.contactNumber.replace(/[-() ]+/g, "");
            leadData.contactNumber = "+1" + leadData.contactNumber;
        }

        if(leadData.pdfFile) {
            pdfFile = leadData.pdfFile;
            delete leadData.pdfFile;
        }

        $.ajax({
            url: SERVER_URL + "/api/v1/cta/" + user_id + "/" + group + "?type=" + type + "&isOpportunity=true",
            type: "POST",
            contentType: 'application/x-www-form-urlencoded',
            crossDomain: true,
            data: { meta: leadData, subject: subject, message: message },
            success: function(res) {
                if (res.success) {
                    $("#" + formId)[0].reset();
                    $("#" + alertMsg).removeClass('hidden');
                    $("#" + alertMsg).addClass('alert-success');
                    $("#" + alertMsg).html('Mail sent successfully!');
                    download(downloadpdf + pdfFile ,"Brochure");

                } else {
                    $("#" + formId)[0].reset();
                    $("#" + alertMsg).removeClass('hidden');
                    $("#" + alertMsg).addClass('alert-warning');
                    $("#" + alertMsg).html('Something goes wrong, please try again.');
                }
            },



            error: function(err) {
                console.log(err, 'error');
                $("#" + formId)[0].reset();
                $("#" + alertMsg).removeClass('hidden');
                $("#" + alertMsg).addClass('alert-warning');
                $("#" + alertMsg).html('Something goes wrong, please try again.');
            },
        });
        return false;
    }

    function download(file,  filename) {
        var element = document.createElement('a');
        element.setAttribute('href', file);
        element.setAttribute('target', '_blank');
        element.setAttribute('download', filename);

        element.style.display = 'none';
        document.body.appendChild(element);
        element.click();
        document.body.removeChild(element);
    }

    function objectifyForm(formArray) { //serialize data function
        returnArray = {};
        for (var i = 0; i < formArray.length; i++) {
            returnArray[formArray[i]['name']] = formArray[i]['value'];
        }
        return returnArray;
    }

});