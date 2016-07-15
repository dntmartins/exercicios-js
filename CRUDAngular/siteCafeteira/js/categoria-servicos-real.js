(function () {
  var categoriaServicos = angular.module('categoriaServicos', [])

  categoriaServicos.factory('CategoriaAPI', function ($rootScope, $http) {

    function extrairDados(f) {
      return function (resposta) {
        if (f !== undefined) {
          return f(resposta.data);
        }
      }
    }

    return {
      salvar: function (categoria, callbackSucesso, callbackErro, callbackAlways) {
        callbackSucesso = extrairDados(callbackSucesso);
        callbackErro = extrairDados(callbackErro);
   	 	var d = new Date();
		var curr_date = d.getDate();
		var curr_month = d.getMonth() + 1;
	    var curr_year = d.getFullYear();
	    $http.get('http://localhost/insert.php?creation=' + curr_date + "/" + curr_month + "/" + curr_year +'&nome='+categoria.nome+'&tipo='+categoria.tipo+ '&preco='+categoria.preco).then(
	            callbackSucesso, callbackErro).finally(callbackAlways);
	     },
	    
      listar: function (callbackSucesso, callbackErro, callbackAlways) {
        callbackSucesso = extrairDados(callbackSucesso);
        callbackErro = extrairDados(callbackErro);
        $http.get('http://localhost/listar.php').then(
          callbackSucesso, callbackErro).finally(callbackAlways);
      },

      editar: function (categoria, callbackSucesso, callbackErro, callbackAlways) {
        callbackSucesso = extrairDados(callbackSucesso);
        callbackErro = extrairDados(callbackErro);
        $http.get('http://localhost/edit.php?id=' + categoria.id + "&nome=" + categoria.nome).then(
          callbackSucesso, callbackErro).finally(callbackAlways);
      },

      deletar: function (id, callbackSucesso, callbackErro, callbackAlways) {
        callbackSucesso = extrairDados(callbackSucesso);
        callbackErro = extrairDados(callbackErro);
        $http.get('http://localhost/delete.php?id=' + id).then(
          callbackSucesso, callbackErro).finally(callbackAlways);
      }
    };
  });
})();