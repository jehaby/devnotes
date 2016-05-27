const SES_ZAYAVKI = "Zayavka";  // in Config.php


------------------------------

function setRegion() {     // Class/Document/Zayavki/tpl/formMain.tml




'/class/Document/Zayavki/ajax/franchiseRegionChoose.php',




------------------------------

    Вероятное решение: захерачить аякс!





        franchiseRegionChoose  ( $_POST['regId'] )



$this->_docDATA['region_id']



Передавать данные из Класса Form.php



 Черновик одна франшиза:

http://wtis.local/docs/Zayavka_Doc/edit/?id=8738312&journal_type=doc_zayavki


    Черновик несколько: 

http://wtis.local/docs/Zayavka_Doc/edit/?id=8270728&journal_type=doc_zayavki




$('#dialogPartner').dialog({




--------------------------------------------------

  function setRegion() {
    var id = $('#region_id').val();
    $.ajax({
      async: false,
      type: 'POST',
      data: {regId: id},
      url: '/class/Document/Zayavki/ajax/franchiseRegionChoose.php',
      success: function(data){
        if(data){
          $('#dialogPartner').html(data);
          $('#dialogPartner').dialog({
            buttons:[
              {
                text: "Выбрать",
                click: function () {
                  var shop = $('#dialogPartner input:radio:checked').val();
                  if (shop != id) {
                    $('#region_id').val(shop);
                    if (checkForStihlViking()) {
                      reloadDeliveryBoys();
                      setDeliverTo();
                    }
                  }
                  $(this).dialog('close');
                }
              }]
            });
        }
      }
    })
    if (checkForStihlViking()) {
      reloadDeliveryBoys();
      setDeliverTo();
    }
  }
