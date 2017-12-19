/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function showGeneralInformation(){
    var url = "{{ path ('ce_liceo_paraiso_history') }}";
    $("#content").load(url);
}
