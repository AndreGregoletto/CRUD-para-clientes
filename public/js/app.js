const baseUrl   = window.location.origin

function onlyNumbers(event) {
    var charCode = (event.which) ? event.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        event.preventDefault()
        return false
    }
    return true
}

function formatCPF(input) {
    var cpf     = input.value.replace(/\D/g, '')
    cpf         = cpf.replace(/^(\d{3})(\d)/, '$1.$2')
    cpf         = cpf.replace(/^(\d{3})\.(\d{3})(\d)/, '$1.$2.$3')
    cpf         = cpf.replace(/^(\d{3})\.(\d{3})\.(\d{3})(\d)/, '$1.$2.$3-$4')
    input.value = cpf;
}

function formatCEP(input) {
    var cep     = input.value.replace(/\D/g, '')
    cep         = cep.replace(/^(\d{5})(\d)/, '$1-$2')
    input.value = cep
}

function destroy(id){

    if (confirm('Deseja realmente DELETAR esse Client?')) {

        $.ajax({
            headers:{
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            , type:'DELETE'
            , url:`${baseUrl}/client/${id}`
            , async:true
            , dataType:'json'
            , success: function(data){
                console.log(data)
                if(data.success == true){
                    alert('Cliente Excluido com sucesso')
                    window.location.reload()
                }else{
                    alert('Ocorreu um erro, tente novamente mais tarde.')
                }
            }
        })
    }else{
        alert('Exclusão cancelada')
    }
}