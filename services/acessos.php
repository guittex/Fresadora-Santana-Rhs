<?php

class acesso extends usuario {

    
    Public $Acesso_Cadastro  =  'Cadastro';
    Public $Acesso_Vendas  =  'Vendas';
    Public $Acesso_Tecnica  =  'Tecnica';
    Public $Acesso_Adm_Producao  =  'Adm.Producao';
    Public $Acesso_Integra_Preactor  =  'Integra.Preactor';
    Public $Acesso_Compras_Sistema  =  'Compras.Sistema';
    Public $Acesso_Notas_Fiscais  =  'Notas_Fiscais';
    Public $Acesso_Livro_caixa  =  'Livro_caixa';
    Public $Acesso_Octopus  =  'Octopus';
    Public $Acesso_Streams_Menu  =  'Streams_Menu';
    Public $Acesso_ConfigSys  =  'ConfigSys';
    Public $Acesso_Cad_Cli  =  'Cad_Cli';
    Public $Acesso_Cad_Forn  =  'Cad_Forn';
    Public $Acesso_Cad_Producao  =  'Cad.Producao';
    Public $Acesso_Cad_User  =  'Cad.User';
    Public $Acesso_Cad_Funcionario  =  'Cad.Funcionario';
    Public $Acesso_Cad_Recurso  =  'Cad.Recurso';
    Public $Acesso_Cad_Grupo  =  'Cad.Grupo';
    Public $Acesso_Cad_Setor  =  'Cad.Setor';
    Public $Acesso_Cad_MaqTipo  =  'Cad.MaqTipo';
    Public $Acesso_Cad_Tempo_Setores  =  'Cad.Tempo.Setores';
    Public $Acesso_Cad_Rec_I  =  'Cad.Rec.I';
    Public $Acesso_Cad_Rec_E  =  'Cad.Rec.E';
    Public $Acesso_Cad_Rec_D  =  'Cad.Rec.D';
    Public $Acesso_Cad_Grupo_I  =  'Cad.Grupo.I';
    Public $Acesso_Cad_Grupo_E  =  'Cad.Grupo.E';
    Public $Acesso_Cad_Grupo_D  =  'Cad.Grupo.D';
    Public $Acesso_Cad_Setor_E  =  'Cad.Setor.E';
    Public $Acesso_Cad_MaqTipo_I  =  'Cad.MaqTipo.I';
    Public $Acesso_Cad_MaqTipo_E  =  'Cad.MaqTipo.E';
    Public $Acesso_Cad_MaqTipo_D  =  'Cad.MaqTipo.D';
    Public $Acesso_Cad_Cli_I  =  'Cad_Cli_I';
    Public $Acesso_Cad_Cli_E  =  'Cad_Cli_E';
    Public $Acesso_Cad_Cli_D  =  'Cad_Cli_D';
    Public $Acesso_Cad_Cli_L  =  'Cad_Cli_L';
    Public $Acesso_Cad_Cli_View  =  'Cad_Cli_View';
    Public $Acesso_Cad_Forn_I  =  'Cad.Forn.I';
    Public $Acesso_Cad_Forn_E  =  'Cad.Forn.E';
    Public $Acesso_Cad_Forn_D  =  'Cad.Forn.D';
    Public $Acesso_Vendas_Alt_Prev  =  'Vendas_Alt_Prev';
    Public $Acesso_Tec_Edit_Prod  =  'Tec.Edit.Prod';
    Public $Acesso_Tec_Lib_OS_PCP  =  'Tec.Lib.OS.PCP';
    Public $Acesso_Forca_Lista_Tarefa  =  'Forca_Lista_Tarefa';
    Public $Acesso_Tec_Print_OS_Processo  =  'Tec.Print.OS.Processo';
    Public $Acesso_Tec_Processos  =  'Tec.Processos';
    Public $Acesso_Tec_Formulas  =  'Tec.Formulas';
    Public $Acesso_Tec_PCP  =  'Tec.PCP';
    Public $Acesso_Tec_RNC  =  'Tec.RNC';
    Public $Acesso_Tec_ReqHoras  =  'Tec.ReqHoras';
    Public $Acesso_Tec_Proc_I  =  'Tec.Proc.I';
    Public $Acesso_Tec_Proc_E  =  'Tec.Proc.E';
    Public $Acesso_Tec_Proc_D  =  'Tec.Proc.D';
    Public $Acesso_Tec_Form_I  =  'Tec.Form.I';
    Public $Acesso_Tec_Form_E  =  'Tec.Form.E';
    Public $Acesso_Tec_Form_D  =  'Tec.Form.D';
    Public $Acesso_Tec_Form_Alt_Esp_  =  'Tec.Form.Alt.Esp.';
    Public $Acesso_Tec_PCP_Alt_Tempo  =  'Tec.PCP.Alt.Tempo';
    Public $Acesso_Tec_PCP_Edit  =  'Tec.PCP.Edit';
    Public $Acesso_Tec_PCP_Alt_Tab_Tempo  =  'Tec.PCP.Alt.Tab.Tempo';
    Public $Acesso_Adm_Prod_Fa_Prog  =  'Adm.Prod.Fa.Prog';
    Public $Acesso_Adm_Prod_OsAtrazo  =  'Adm.Prod.OsAtrazo';
    Public $Acesso_Compras_Solicitacao  =  'Compras.Solicitacao';
    Public $Acesso_Compras_Cotacao_Total  =  'Compras.Cotacao_Total';
    Public $Acesso_Compras_Pedido  =  'Compras.Pedido';
    Public $Acesso_Compras_Recebimento  =  'Compras.Recebimento';
    Public $Acesso_Compras_Cadastro  =  'Compras.Cadastro';
    Public $Acesso_Compras_Pesquisa_Solicitacao  =  'Compras.Pesquisa.Solicitacao';
    Public $Acesso_Compras_Inclui_Edita_Solicitacao  =  'Compras.Inclui.Edita.Solicitacao';
    Public $Acesso_Livro_caixa_Master  =  'Livro_caixa_Master';
    Public $Acesso_Octopus_CPD  =  'Octopus_CPD';
    Public $Acesso_Octopus_Fabrica  =  'Octopus_Fabrica';
    Public $Acesso_Octopus_Preventiva  =  'Octopus_Preventiva';
    Public $Acesso_Streams_Config  =  'Streams_Config';
    Public $Acesso_Compras_Familia  =  'Compras.Familia';
    Public $Acesso_Compras_Familia_Inserir  =  'Compras.Familia.Inserir';
    Public $Acesso_Compras_Familia_Editar  =  'Compras.Familia.Editar';
    Public $Acesso_Compras_Familia_Associar_Fornecedor  =  'Compras.Familia.Associar.Fornecedor';
    Public $Acesso_Cad_Forn_Contatos  =  'Cad_Forn.Contatos';
    Public $Acesso_Cad_Forn_Contatos_Incluir  =  'Cad_Forn.Contatos.Incluir';
    Public $Acesso_Cad_Forn_Contatos_Editar  =  'Cad_Forn.Contatos.Editar';
    Public $Acesso_Cad_Forn_Contatos_Deletar  =  'Cad_Forn.Contatos.Deletar';
    Public $Acesso_Cad_Forn_Especificacoes  =  'Cad_Forn.Especificacoes';
    Public $Acesso_Cad_Forn_Especificacoes_Inserir  =  'Cad_Forn.Especificacoes.Inserir';
    Public $Acesso_Cad_Forn_Especificacoes_Editar  =  'Cad_Forn.Especificacoes.Editar';
    Public $Acesso_Cad_Forn_Especificacoes_Deletar  =  'Cad_Forn.Especificacoes.Deletar';
    Public $Acesso_Compras_Familia_Associar_Fornecedor_Incluir  =  'Compras.Familia.Associar.Fornecedor.Incluir';
    Public $Acesso_Compras_Familia_Associar_Fornecedor_Excluir  =  'Compras.Familia.Associar.Fornecedor.Excluir';
    Public $Acesso_Compras_Solicitacao_Condicional  =  'Compras.Solicitacao.Condicional';
    Public $Acesso_Compras_Solicitacao_Condicional_Aprovador  =  'Compras.Solicitacao.Condicional.Aprovador';
    Public $Acesso_Compras_Solicitacao_Condicional_Comprador  =  'Compras.Solicitacao.Condicional.Comprador';
    Public $Acesso_Compras_Solicitacao_Rejeitar  =  'Compras.Solicitacao.Rejeitar';
    Public $Acesso_Compras_Solicitacao_Rejeitar_SO  =  'Compras.Solicitacao.Rejeitar.SO';
    Public $Acesso_Compras_Solicitacao_Rejeitar_CA  =  'Compras.Solicitacao.Rejeitar.CA';
    Public $Acesso_Compras_Solicitacao_Rejeitar_SA  =  'Compras.Solicitacao.Rejeitar.SA';
    Public $Acesso_Compras_Solicitacao_EditarEspecial  =  'Compras.Solicitacao.EditarEspecial';
    Public $Acesso_Compras_Solicitacao_EditarTodasSituacoes  =  'Compras.Solicitacao.EditarTodasSituacoes';
    Public $Acesso_Orcamento  =  'Orcamento';
    Public $Acesso_Orcamento_Inserir  =  'Orcamento.Inserir';
    Public $Acesso_Orcamento_Listar  =  'Orcamento.Listar';
    Public $Acesso_Catalogo  =  'Catalogo';
    Public $Acesso_BibliotecaVirtual  =  'BibliotecaVirtual';
    Public $Acesso_BibliotecaVirtual_SalvaComo  =  'BibliotecaVirtual.SalvaComo';
    Public $Acesso_BibliotecaVirtual_Grupos  =  'BibliotecaVirtual.Grupos';
    Public $Acesso_Compras_ServioExterno  =  'Compras.ServioExterno';
    Public $Acesso_Compras_Familia_Apagar  =  'Compras.Familia.Apagar';
    Public $Acesso_ControledeOramento_VerUsuarioAlteracao  =  'ControledeOramento.VerUsuarioAlteracao';
    Public $Acesso_Compras_Solicitao_VoltarparaCA  =  'Compras.Solicitao.VoltarparaCA';
    Public $Acesso_Compras_PedidodeCompra_CancelarAcesso  =  'Compras.PedidodeCompra.CancelarAcesso';
    Public $Acesso_Compras_PedidodeCompra_Baixarsemrecebimento  =  'Compras.PedidodeCompra.Baixarsemrecebimento';
    Public $Acesso_Streams_Imprimir  =  'Streams.Imprimir';
    Public $Acesso_Streams_Digitalizar  =  'Streams.Digitalizar';
    Public $Acesso_Compras_PedidodeCompra_Transferiritensentrepedidos  =  'Compras.PedidodeCompra.Transferiritensentrepedidos';
    Public $Acesso_Instrumentos  =  'Instrumentos';
    Public $Acesso_Instrumentos_Almoxarife  =  'Instrumentos.Almoxarife';
    Public $Acesso_Instrumentos_Metrologia  =  'Instrumentos.Metrologia';
    Public $Acesso_Instrumentos_Metrologia_Inserir  =  'Instrumentos.Metrologia.Inserir';
    Public $Acesso_Instrumentos_Metrologia_Alterar  =  'Instrumentos.Metrologia.Alterar';
    Public $Acesso_Instrumentos_Metrologia_Deletar  =  'Instrumentos.Metrologia.Deletar';
    Public $Acesso_Instrumentos_Almoxarife_Inserir  =  'Instrumentos.Almoxarife.Inserir';
    Public $Acesso_Instrumentos_Almoxarife_Alterar  =  'Instrumentos.Almoxarife.Alterar';
    Public $Acesso_Instrumentos_Almoxarife_Deletar  =  'Instrumentos.Almoxarife.Deletar';
    Public $Acesso_Instrumentos_Almoxarife_Retirar  =  'Instrumentos.Almoxarife.Retirar';
    Public $Acesso_Instrumentos_Metrologia_Retirar  =  'Instrumentos.Metrologia.Retirar';
    Public $Acesso_Instrumentos_Metrologia_Afericao  =  'Instrumentos.Metrologia.Afericao';
    Public $Acesso_Compras_PedidodeCompra_Comprador  =  'Compras.PedidodeCompra.Comprador';
    Public $Acesso_Instrumentos_Almoxarife_Amostra  =  'Instrumentos.Almoxarife.Amostra';
    Public $Acesso_Instrumentos_Almoxarife_Amostra_Inserir  =  'Instrumentos.Almoxarife.Amostra.Inserir';
    Public $Acesso_Instrumentos_Almoxarife_Amostra_Editar  =  'Instrumentos.Almoxarife.Amostra.Editar';
    Public $Acesso_Instrumentos_Almoxarife_Amostra_Deletar  =  'Instrumentos.Almoxarife.Amostra.Deletar';
    Public $Acesso_Instrumentos_Almoxarife_Amostra_RetirarDefinitivamente  =  'Instrumentos.Almoxarife.Amostra.RetirarDefinitivamente';
    Public $Acesso_Instrumentos_Almoxarife_Informaes  =  'Instrumentos.Almoxarife.Informaes';
    Public $Acesso_Instrumentos_Almoxarife_Informaes_Inserir  =  'Instrumentos.Almoxarife.Informaes.Inserir';
    Public $Acesso_Instrumentos_Almoxarife_Informaes_Editar  =  'Instrumentos.Almoxarife.Informaes.Editar';
    Public $Acesso_Compras_AutorizaodePagamentos  =  'Compras.AutorizaodePagamentos';
    Public $Acesso_Compras_AutorizaodePagamentos_Incluir  =  'Compras.AutorizaodePagamentos.Incluir';
    Public $Acesso_Compras_AutorizaodePagamentos_View  =  'Compras.AutorizaodePagamentos.View';
    Public $Acesso_Compras_AutorizaodePagamentos_Aprovar  =  'Compras.AutorizaodePagamentos.Aprovar';
    Public $Acesso_Compras_InserirAlterarPastadeAprovacao  =  'Compras.InserirAlterarPastadeAprovacao';
    Public $Acesso_Compras_PedidodeCompra_DescontonoItem  =  'Compras.PedidodeCompra.DescontonoItem';
    Public $Acesso_Compras_AutorizaodePagamentos_View_All  =  'Compras.AutorizaodePagamentos.View_All';
    Public $Acesso_Compras_CadastroFornecedorSite  =  'Compras.CadastroFornecedorSite';
    Public $Acesso_Instrumentos_Almoxarife_Broca  =  'Instrumentos.Almoxarife.Broca';
    Public $Acesso_Instrumentos_Almoxarife_Broca_Inserir  =  'Instrumentos.Almoxarife.Broca.Inserir';
    Public $Acesso_Instrumentos_Almoxarife_Broca_Alterar  =  'Instrumentos.Almoxarife.Broca.Alterar';
    Public $Acesso_Instrumentos_Almoxarife_Broca_RemoverItem  =  'Instrumentos.Almoxarife.Broca.RemoverItem';
    Public $Acesso_Instrumentos_Almoxarife_Broca_InserirItem  =  'Instrumentos.Almoxarife.Broca.InserirItem';
    Public $Acesso_Instrumentos_Almoxarife_Broca_AlterarQuantidade  =  'Instrumentos.Almoxarife.Broca.AlterarQuantidade';
    Public $Acesso_Vendas_Produtos  =  'Vendas.Produtos';
    Public $Acesso_Vendas_Produtos_Sobremetal  =  'Vendas.Produtos.Sobremetal';
    Public $Acesso_LivroCaixa_PrevisaodePagamento  =  'LivroCaixa.PrevisaodePagamento';
    Public $Acesso_LivroCaixa_PrevisaodePagamento_Incluir  =  'LivroCaixa.PrevisaodePagamento.Incluir';
    Public $Acesso_LivroCaixa_PrevisaodePagamento_View  =  'LivroCaixa.PrevisaodePagamento.View';
    Public $Acesso_LivroCaixa_PrevisaodePagamento_Aprovar  =  'LivroCaixa.PrevisaodePagamento.Aprovar';
    Public $Acesso_LivroCaixa_PrevisaodePagamento_ViewAll  =  'LivroCaixa.PrevisaodePagamento.ViewAll';
    Public $Acesso_Instrumentos_Patrimonio  =  'Instrumentos.Patrimonio';
    Public $Acesso_Instrumentos_Patrimonio_Incluir  =  'Instrumentos.Patrimonio.Incluir';
    Public $Acesso_Instrumentos_Patrimonio_Excluir  =  'Instrumentos.Patrimonio.Excluir';
    Public $Acesso_Instrumentos_Patrimonio_RemoverItem  =  'Instrumentos.Patrimonio.RemoverItem';
    Public $Acesso_Instrumentos_Patrimonio_InserirItem  =  'Instrumentos.Patrimonio.InserirItem';
    Public $Acesso_Instrumentos_Patrimonio_AlterarQuantidade  =  'Instrumentos.Patrimonio.AlterarQuantidade';
    Public $Acesso_Instrumentos_Patrimonio_AlterarCategoria  =  'Instrumentos.Patrimonio.AlterarCategoria';
    Public $Acesso_Instrumentos_Patrimonio_Retirar  =  'Instrumentos.Patrimonio.Retirar';
    Public $Acesso_Instrumentos_Patrimonio_Remover  =  'Instrumentos.Patrimonio.Remover';
    Public $Acesso_Instrumentos_Patrimonio_MudarCategoria  =  'Instrumentos.Patrimonio.MudarCategoria';
    Public $Acesso_Instrumentos_Patrimonio_Alterar  =  'Instrumentos.Patrimonio.Alterar';
    Public $Acesso_Streams_ArquivoMorto  =  'Streams.ArquivoMorto';
    Public $Acesso_Instrumentos_Patrimonio_Devolver  =  'Instrumentos.Patrimonio.Devolver';
    Public $Acesso_CorreioInterno  =  'CorreioInterno';
    Public $Acesso_CorreioInterno_Auditar  =  'CorreioInterno.Auditar';
    Public $Acesso_Compras_Solicitao_RevisarSolicitacao  =  'Compras.Solicitao.RevisarSolicitacao';
    Public $Acesso_CorreioInterno_Verligacoespendentes  =  'CorreioInterno.Verligacoespendentes';
    Public $Acesso_Streams_ImprimirGrafico  =  'Streams.ImprimirGrafico';
    Public $Acesso_BibliotecaVirtual_Pasta  =  'BibliotecaVirtual.Pasta';
    Public $Acesso_BibliotecaVirtual_Pasta_Inserir  =  'BibliotecaVirtual.Pasta.Inserir';
    Public $Acesso_BibliotecaVirtual_Pasta_Excluir  =  'BibliotecaVirtual.Pasta.Excluir';
    Public $Acesso_BibliotecaVirtual_Arquivo  =  'BibliotecaVirtual.Arquivo';
    Public $Acesso_BibliotecaVirtual_Arquivo_Inserir  =  'BibliotecaVirtual.Arquivo.Inserir';
    Public $Acesso_BibliotecaVirtual_Arquivo_Excluir  =  'BibliotecaVirtual.Arquivo.Excluir';
    Public $Acesso_Compras_Item  =  'Compras.Item';
    Public $Acesso_Compras_Item_Inserir  =  'Compras.Item.Inserir';
    Public $Acesso_Compras_Item_Alterar  =  'Compras.Item.Alterar';
    Public $Acesso_Compras_Item_Modelo  =  'Compras.Item.Modelo';
    Public $Acesso_Compras_Item_Modelo_Inserir  =  'Compras.Item.Modelo.Inserir';
    Public $Acesso_Compras_Item_Modelo_Excluir  =  'Compras.Item.Modelo.Excluir';
    Public $Acesso_Compras_Fornecedor  =  'Compras.Fornecedor';
    Public $Acesso_Compras_Fornecedor_Site  =  'Compras.Fornecedor.Site';
    Public $Acesso_Compras_Fornecedor_Site_Cadastrar  =  'Compras.Fornecedor.Site.Cadastrar';
    Public $Acesso_Compras_Fornecedor_Site_Remover  =  'Compras.Fornecedor.Site.Remover';
    Public $Acesso_Vendas_Produtos_IncluirProduto  =  'Vendas.Produtos.IncluirProduto';
    Public $Acesso_Vendas_Produtos_Visualizarepesquisar  =  'Vendas.Produtos.Visualizarepesquisar';
    Public $Acesso_Vendas_Produtos_IncluireEditarCadastros  =  'Vendas.Produtos.IncluireEditarCadastros';
    Public $Acesso_Compras_Solicitao_Cotacao  =  'Compras.Solicitao.Cotacao';
    Public $Acesso_Compras_Solicitao_Cotacao_Visualizar  =  'Compras.Solicitao.Cotacao.Visualizar';
    Public $Acesso_Compras_Solicitao_Cotacao_InserirAlterar  =  'Compras.Solicitao.Cotacao.InserirAlterar';
    Public $Acesso_Compras_Solicitao_Cotacao_Remover  =  'Compras.Solicitao.Cotacao.Remover';
    Public $Acesso_Compras_Solicitao_Cotacao_EnviarSite  =  'Compras.Solicitao.Cotacao.EnviarSite';
    Public $Acesso_Compras_Solicitao_Cotacao_RemoverSite  =  'Compras.Solicitao.Cotacao.RemoverSite';
    Public $Acesso_Compras_Solicitao_Cotacao_RemoverSiteRespondido  =  'Compras.Solicitao.Cotacao.RemoverSiteRespondido';
    Public $Acesso_Classsificacaofiscal  =  'Classsificacaofiscal';
    Public $Acesso_ClassificacaoFiscal_AcessoAlterarIncluirClassificacaoFiscal  =  'ClassificacaoFiscal.AcessoAlterarIncluirClassificacaoFiscal';
    Public $Acesso_ClassificacaoFiscal_AcessoClassificacaoFiscalEditar  =  'ClassificacaoFiscal.AcessoClassificacaoFiscalEditar';
    Public $Acesso_ClassificacaoFiscal_AcessoClassificacaoFiscalVisualizar  =  'ClassificacaoFiscal.AcessoClassificacaoFiscalVisualizar';
    Public $Acesso_Streams_IncluirArquivosemScanear  =  'Streams.IncluirArquivosemScanear';
    Public $Acesso_Compras_SaidadeEstoque  =  'Compras.SaidadeEstoque';
    Public $Acesso_ControledeOramento_EscolherFuncionarioResponsavel  =  'ControledeOramento.EscolherFuncionarioResponsavel';
    Public $Acesso_ControledeOramento_TiposdeOramento  =  'ControledeOramento.TiposdeOramento';
    Public $Acesso_ControledeOramento_TiposdeOramento_Cadastrar  =  'ControledeOramento.TiposdeOramento.Cadastrar';
    Public $Acesso_Streams_Extrairacesso  =  'Streams.Extrairacesso';
    Public $Acesso_Vendas_Produtos_Configuracao  =  'Vendas.Produtos.Configuracao';
    Public $Acesso_Compras_Solicitao_Cotacao_Alterardatadevalidade  =  'Compras.Solicitao.Cotacao.Alterardatadevalidade';
    Public $Acesso_Streams_Grupos  =  'Streams.Grupos';
    Public $Acesso_Streams_Grupos_Cadastro  =  'Streams.Grupos.Cadastro';
    Public $Acesso_Streams_Grupos_AlterarAcessosdoArquivo  =  'Streams.Grupos.AlterarAcessosdoArquivo';
    Public $Acesso_Compras_ControledeDespesas  =  'Compras.ControledeDespesas';
    Public $Acesso_Compras_ControledeDespesas_Visualizar  =  'Compras.ControledeDespesas.Visualizar';
    Public $Acesso_Vendas_Oramento  =  'Vendas.Oramento';
    Public $Acesso_Compras_Item_AutorizarDepartamentos  =  'Compras.Item.AutorizarDepartamentos';
    Public $Acesso_Compras_Solicitao_CompraProgramada  =  'Compras.Solicitao.CompraProgramada';
    Public $Acesso_Vendas_Oramento_Revisar  =  'Vendas.Oramento.Revisar';
    Public $Acesso_Vendas_Oramento_Incluir  =  'Vendas.Oramento.Incluir';
    Public $Acesso_Vendas_Oramento_Alterar  =  'Vendas.Oramento.Alterar';
    Public $Acesso_Vendas_Oramento_Remover  =  'Vendas.Oramento.Remover';
    Public $Acesso_Vendas_OS  =  'Vendas.OS';
    Public $Acesso_Vendas_OS_AbrirOS  =  'Vendas.OS.AbrirOS';
    Public $Acesso_Vendas_OS_AlterarOS  =  'Vendas.OS.AlterarOS';
    Public $Acesso_Vendas_OS_ExcluirOS  =  'Vendas.OS.ExcluirOS';
    Public $Acesso_FAT20  =  'FAT20';
    Public $Acesso_FAT20_ItensdaNota  =  'FAT20.ItensdaNota';
    Public $Acesso_FAT20_Ttulos  =  'FAT20.Ttulos';
    Public $Acesso_FAT20_NotaFiscal  =  'FAT20.NotaFiscal';
    Public $Acesso_FAT20_NotaFiscal_Inserir  =  'FAT20.NotaFiscal.Inserir';
    Public $Acesso_FAT20_NotaFiscal_Alterar  =  'FAT20.NotaFiscal.Alterar';
    Public $Acesso_FAT20_NotaFiscal_Cancelar  =  'FAT20.NotaFiscal.Cancelar';
    Public $Acesso_FAT20_Ttulos_GerarTtulos  =  'FAT20.Ttulos.GerarTtulos';
    Public $Acesso_FAT20_Ttulos_Desconto  =  'FAT20.Ttulos.Desconto';
    Public $Acesso_FAT20_Ttulos_Deoluo  =  'FAT20.Ttulos.Deoluo';
    Public $Acesso_FAT20_ItensdaNota_Inserir  =  'FAT20.ItensdaNota.Inserir';
    Public $Acesso_FAT20_ItensdaNota_Alterar  =  'FAT20.ItensdaNota.Alterar';
    Public $Acesso_FAT20_ItensdaNota_Remover  =  'FAT20.ItensdaNota.Remover';
    Public $Acesso_Instrumentos_Metrologia_RetirarVencido  =  'Instrumentos.Metrologia.RetirarVencido';
    Public $Acesso_BibliotecaVirtual_Arquivo_ExecutarNativo  =  'BibliotecaVirtual.Arquivo.ExecutarNativo';
    Public $Acesso_Vendas_Agenda  =  'Vendas.Agenda';
    Public $Acesso_Vendas_Agenda_Vendedor  =  'Vendas.Agenda.Vendedor';
    Public $Acesso_Vendas_Agenda_Agenda  =  'Vendas.Agenda.Agenda';
    Public $Acesso_Vendas_Agenda_Vendedor_Inserir  =  'Vendas.Agenda.Vendedor.Inserir';
    Public $Acesso_Vendas_Agenda_Vendedor_Alterar  =  'Vendas.Agenda.Vendedor.Alterar';
    Public $Acesso_Vendas_Agenda_Vendedor_Remover  =  'Vendas.Agenda.Vendedor.Remover';
    Public $Acesso_Vendas_Agenda_Agenda_Inserir  =  'Vendas.Agenda.Agenda.Inserir';
    Public $Acesso_Vendas_Agenda_Agenda_Alterar  =  'Vendas.Agenda.Agenda.Alterar';
    Public $Acesso_Vendas_Agenda_Agenda_Remover  =  'Vendas.Agenda.Agenda.Remover';
    Public $Acesso_Vendas_Agenda_Auditar  =  'Vendas.Agenda.Auditar';
    Public $Acesso_Compras_PedidodeCompra_Devoluo  =  'Compras.PedidodeCompra.Devoluo';
    Public $Acesso_Compras_Categorias  =  'Compras.Categorias';
    Public $Acesso_Compras_Categorias_Inserir  =  'Compras.Categorias.Inserir';
    Public $Acesso_Compras_Categorias_Alterar  =  'Compras.Categorias.Alterar';
    Public $Acesso_Compras_Categorias_Remover  =  'Compras.Categorias.Remover';
    Public $Acesso_Compras_Categorias_Fornecedor  =  'Compras.Categorias.Fornecedor';
    Public $Acesso_Compras_Categorias_Fornecedor_Inserir  =  'Compras.Categorias.Fornecedor.Inserir';
    Public $Acesso_Compras_Categorias_Fornecedor_Remover  =  'Compras.Categorias.Fornecedor.Remover';
    Public $Acesso_Cadastro_Transportadoras  =  'Cadastro.Transportadoras';
    Public $Acesso_Cadastro_Transportadoras_Inserir  =  'Cadastro.Transportadoras.Inserir';
    Public $Acesso_Cadastro_Transportadoras_Alterar  =  'Cadastro.Transportadoras.Alterar';
    Public $Acesso_Cadastro_Transportadoras_Excluir  =  'Cadastro.Transportadoras.Excluir';
    Public $Acesso_Cadastro_Transportadoras_Contatos  =  'Cadastro.Transportadoras.Contatos';
    Public $Acesso_Cadastro_Transportadoras_Contatos_Inserir  =  'Cadastro.Transportadoras.Contatos.Inserir';
    Public $Acesso_Cadastro_Transportadoras_Contatos_Alterar  =  'Cadastro.Transportadoras.Contatos.Alterar';
    Public $Acesso_Cadastro_Transportadoras_Contatos_Excluir  =  'Cadastro.Transportadoras.Contatos.Excluir';
    Public $Acesso_Cadastro_Clientes_Editar_EditarGrupodeVendas  =  'Cadastro.Clientes.Editar.EditarGrupodeVendas';
    Public $Acesso_GEDSantana  =  'GEDSantana';
    Public $Acesso_GEDSantana_Tipos  =  'GEDSantana.Tipos';
    Public $Acesso_GEDSantana_Tipos_Inserir  =  'GEDSantana.Tipos.Inserir';
    Public $Acesso_GEDSantana_Tipos_Alterar  =  'GEDSantana.Tipos.Alterar';
    Public $Acesso_Reparo  =  'Reparo';
    Public $Acesso_Instrumentos_Metrologia_Reparo  =  'Instrumentos.Metrologia.Reparo';
    Public $Acesso_Instrumentos_Metrologia_Solicitao  =  'Instrumentos.Metrologia.Solicitao';
    Public $Acesso_Vendas_Oramento_PreoAbaixodoMinimo  =  'Vendas.Oramento.PreoAbaixodoMinimo';
    Public $Acesso_FAT20_Fechamento  =  'FAT20.Fechamento';
    Public $Acesso_Vendas_Oramento_Auditoria  =  'Vendas.Oramento.Auditoria';
    Public $Acesso_GEDSantana_Tipos_CarregarIcones  =  'GEDSantana.Tipos.CarregarIcones';
    Public $Acesso_GEDSantana_ArquivosdoProduto  =  'GEDSantana.ArquivosdoProduto';
    Public $Acesso_GEDSantana_ArquivosdoProduto_InserirArquivos  =  'GEDSantana.ArquivosdoProduto.InserirArquivos';
    Public $Acesso_GEDSantana_Grupos  =  'GEDSantana.Grupos';
    Public $Acesso_GEDSantana_Grupos_Inserir  =  'GEDSantana.Grupos.Inserir';
    Public $Acesso_GEDSantana_Grupos_Alterar  =  'GEDSantana.Grupos.Alterar';
    Public $Acesso_GEDSantana_Grupos_Remover  =  'GEDSantana.Grupos.Remover';
    Public $Acesso_GEDSantana_Grupos_MarcarcomoAdministrador  =  'GEDSantana.Grupos.MarcarcomoAdministrador';
    Public $Acesso_GEDSantana_Grupos_DefinirUsuarios  =  'GEDSantana.Grupos.DefinirUsuarios';
    Public $Acesso_Compras2  =  'Compras2';
    Public $Acesso_ControledeUsurios  =  'ControledeUsurios';
    Public $Acesso_ClculodoRedutorTrocicloide  =  'ClculodoRedutorTrocicloide';
    Public $Acesso_Compras_Solicitao_AprovarCondicional  =  'Compras.Solicitao.AprovarCondicional';
    Public $Acesso_Compras_Solicitao_AprovarCondicional_AprovarDefinitivo  =  'Compras.Solicitao.AprovarCondicional.AprovarDefinitivo';
    Public $Acesso_Tecnica_PCP_ColetorSantana  =  'Tecnica.PCP.ColetorSantana';
    Public $Acesso_ClculodoRedutorTrocicloide_VizualizarOrcamento  =  'ClculodoRedutorTrocicloide.VizualizarOrcamento';
    Public $Acesso_ClculodoRedutorTrocicloide_EditarTabelasdeParametros  =  'ClculodoRedutorTrocicloide.EditarTabelasdeParametros';
    Public $Acesso_Compras2_Planilha  =  'Compras2.Planilha';
    Public $Acesso_Compras2_Planilha_Inserir  =  'Compras2.Planilha.Inserir';
    Public $Acesso_Compras2_Planilha_InserirDescontoItem  =  'Compras2.Planilha.InserirDescontoItem';
    Public $Acesso_Compras2_Planilha_InserirDescontoTotal  =  'Compras2.Planilha.InserirDescontoTotal';
    Public $Acesso_Cadastro_Fornecedores_DadosBancarios  =  'Cadastro.Fornecedores.DadosBancarios';
    Public $Acesso_Cadastro_Fornecedores_DadosBancarios_Incluir  =  'Cadastro.Fornecedores.DadosBancarios.Incluir';
    Public $Acesso_Cadastro_Fornecedores_DadosBancarios_Editar  =  'Cadastro.Fornecedores.DadosBancarios.Editar';
    Public $Acesso_Cadastro_Fornecedores_DadosBancarios_Deletar  =  'Cadastro.Fornecedores.DadosBancarios.Deletar';
    Public $Acesso_Compras2_Pedido  =  'Compras2.Pedido';
    Public $Acesso_Compras2_Pedido_Imprimir  =  'Compras2.Pedido.Imprimir';
    Public $Acesso_Compras2_Pedido_IncluirDesconto  =  'Compras2.Pedido.IncluirDesconto';
    Public $Acesso_Cadastro_Fornecedores_Portal  =  'Cadastro.Fornecedores.Portal';
    Public $Acesso_Cadastro_Fornecedores_Portal_Inserir  =  'Cadastro.Fornecedores.Portal.Inserir';
    Public $Acesso_Cadastro_Fornecedores_Portal_Editar  =  'Cadastro.Fornecedores.Portal.Editar';
    Public $Acesso_Cadastro_Fornecedores_Portal_VisualizarSenha  =  'Cadastro.Fornecedores.Portal.VisualizarSenha';
    Public $Acesso_Cadastro_Fornecedores_Portal_AlterarSenha  =  'Cadastro.Fornecedores.Portal.AlterarSenha';
    Public $Acesso_Cadastro_Fornecedores_HomologarFornecedor  =  'Cadastro.Fornecedores.HomologarFornecedor';
    Public $Acesso_Cadastro_Fornecedores_PlanodeContas  =  'Cadastro.Fornecedores.PlanodeContas';
    Public $Acesso_Compras2_CondiodePagamento  =  'Compras2.CondiodePagamento';
    Public $Acesso_Compras2_SetordeCompra  =  'Compras2.SetordeCompra';
    Public $Acesso_Compras2_Item  =  'Compras2.Item';
    Public $Acesso_Compras2_Famlia  =  'Compras2.Famlia';
    Public $Acesso_Compras2_CondiodePagamento_Inserir  =  'Compras2.CondiodePagamento.Inserir';
    Public $Acesso_Compras2_CondiodePagamento_Editar  =  'Compras2.CondiodePagamento.Editar';
    Public $Acesso_Compras2_SetordeCompra_Inserir  =  'Compras2.SetordeCompra.Inserir';
    Public $Acesso_Compras2_SetordeCompra_Editar  =  'Compras2.SetordeCompra.Editar';
    Public $Acesso_Compras2_Item_Inserir  =  'Compras2.Item.Inserir';
    Public $Acesso_Compras2_Item_Editar  =  'Compras2.Item.Editar';
    Public $Acesso_Compras2_Famlia_Inserir  =  'Compras2.Famlia.Inserir';
    Public $Acesso_Compras2_Famlia_Editar  =  'Compras2.Famlia.Editar';
    Public $Acesso_Compras2_Famlia_IncluirItem  =  'Compras2.Famlia.IncluirItem';
    Public $Acesso_Compras2_Famlia_IncluirFornecedor  =  'Compras2.Famlia.IncluirFornecedor';
    Public $Acesso_Compras2_Famlia_Item_Incluir  =  'Compras2.Famlia.Item.Incluir';
    Public $Acesso_Compras2_Famlia_Item_Remover  =  'Compras2.Famlia.Item.Remover';
    Public $Acesso_Compras2_Famlia_Fornecedor_Incluir  =  'Compras2.Famlia.Fornecedor.Incluir';
    Public $Acesso_Compras2_Famlia_Fornecedor_Remover  =  'Compras2.Famlia.Fornecedor.Remover';
    Public $Acesso_Compras2_Material  =  'Compras2.Material';
    Public $Acesso_Compras2_Material_Inserir  =  'Compras2.Material.Inserir';
    Public $Acesso_Compras2_Material_Alterar  =  'Compras2.Material.Alterar';
    Public $Acesso_Compras2_Material_Deletar  =  'Compras2.Material.Deletar';
    Public $Acesso_Compras2_SetordeCompra_Deleter  =  'Compras2.SetordeCompra.Deleter';
    Public $Acesso_Compras2_Item_Deletar  =  'Compras2.Item.Deletar';
    Public $Acesso_Compras2_Solicitacao  =  'Compras2.Solicitacao';
    Public $Acesso_Compras2_Solicitacao_Incluir_Editar  =  'Compras2.Solicitacao.Incluir_Editar';
    Public $Acesso_Compras2_Solicitacao_EditarCA  =  'Compras2.Solicitacao.EditarCA';
    Public $Acesso_Compras2_Solicitacao_RejeitarSolicitacao  =  'Compras2.Solicitacao.RejeitarSolicitacao';
    Public $Acesso_Compras2_Solicitacao_VoltarparaCA  =  'Compras2.Solicitacao.VoltarparaCA';
    Public $Acesso_Compras2_Solicitacao_AprovarCondicional  =  'Compras2.Solicitacao.AprovarCondicional';
    Public $Acesso_Compras2_Solicitacao_Postit  =  'Compras2.Solicitacao.Postit';
    Public $Acesso_Compras2_Solicitacao_Postit_InserirComentariocomoAprovador  =  'Compras2.Solicitacao.Postit.InserirComentariocomoAprovador';
    Public $Acesso_Compras2_Solicitacao_Postit_InserirComentariocomoComprador  =  'Compras2.Solicitacao.Postit.InserirComentariocomoComprador';
    Public $Acesso_Compras2_Solicitacao_RejeitarSolicitacao_SituacaoSO  =  'Compras2.Solicitacao.RejeitarSolicitacao.SituacaoSO';
    Public $Acesso_Compras2_Solicitacao_RejeitarSolicitacao_SituacaoCA  =  'Compras2.Solicitacao.RejeitarSolicitacao.SituacaoCA';
    Public $Acesso_Compras2_Solicitacao_RejeitarSolicitacao_SituacaoSA  =  'Compras2.Solicitacao.RejeitarSolicitacao.SituacaoSA';
    Public $Acesso_Compras2_Solicitacao_Pesquisar  =  'Compras2.Solicitacao.Pesquisar';
    Public $Acesso_Compras2_Solicitacao_Historico  =  'Compras2.Solicitacao.Historico';
    Public $Acesso_Orcamento_AlterarComissoes  =  'Orcamento.AlterarComissoes';
    Public $Acesso_PCO  =  'PCO';
    Public $Acesso_PCO_Gestor_de_Tipo  =  'PCO.Gestor_de_Tipo';
    Public $Acesso_PCO_Tranferencia_Mesma_Moeda  =  'PCO.Tranferencia_Mesma_Moeda';
    Public $Acesso_PCO_Editar_Cadastro_Tipo_e_Conta  =  'PCO.Editar_Cadastro_Tipo_e_Conta';
    Public $Acesso_PCO_Aprovar_Aporte  =  'PCO.Aprovar_Aporte';
    Public $Acesso_PCO_Aprovar_Saldo_Inicial  =  'PCO.Aprovar_Saldo_Inicial';
    Public $Acesso_PCO_VisualizarTodososTipos  =  'PCO.VisualizarTodososTipos';
    Public $Acesso_Cadastro_Representantes  =  'Cadastro.Representantes';
    Public $Acesso_Cadastro_Representantes_Incluir  =  'Cadastro.Representantes.Incluir';
    Public $Acesso_Cadastro_Representantes_Editar  =  'Cadastro.Representantes.Editar';
    Public $Acesso_Vendas_Comisso  =  'Vendas.Comisso';
    Public $Acesso_Vendas_Comisso_VisualizarComissodeTodos  =  'Vendas.Comisso.VisualizarComissodeTodos';
    Public $Acesso_Tec_PCP_Edit_Baixa  =  'Tec.PCP.Edit.Baixa';
    Public $Acesso_Tecnica_RELATORIODIMENSIONAL  =  'Tecnica.RELATORIODIMENSIONAL';
    Public $Acesso_Tecnica_RELATORIODIMENSIONAL_INCLUIR  =  'Tecnica.RELATORIODIMENSIONAL.INCLUIR';
    Public $Acesso_Tecnica_RELATORIODIMENSIONAL_EDITARDEOUTROUSUARIO  =  'Tecnica.RELATORIODIMENSIONAL.EDITARDEOUTROUSUARIO';
    Public $Acesso_Tec_RNC_Editar  =  'Tec.RNC_Editar';
    Public $Acesso_RECEBERMERCADORIA  =  'RECEBERMERCADORIA';
    Public $Acesso_Compras_RecebimentodeMaterial_INSERIRRECEBIMENTO  =  'Compras.RecebimentodeMaterial.INSERIRRECEBIMENTO';
    Public $Acesso_Tec_PCP_PREVISAODEFATURAMENTO  =  'Tec.PCP.PREVISAODEFATURAMENTO';
    Public $Acesso_Cadastro_SETORVENDAS  =  'Cadastro.SETORVENDAS';
    Public $Acesso_Cadastro_SETORVENDAS1_INCLUIR  =  'Cadastro.SETORVENDAS1.INCLUIR';
    Public $Acesso_Cadastro_SETORVENDAS1_EDITAR  =  'Cadastro.SETORVENDAS1.EDITAR';
    Public $Acesso_Vendas_Comisso_EditarTabelaComissao  =  'Vendas.Comisso.EditarTabelaComissao';


    public function validaAcesso($chave){
        $acesso_usuario = $this->getAcesso();
        if (strpos($acesso_usuario, $chave)){

        }

    }

    public function getReqHoras(){
        
        return $this->Acesso_Tec_ReqHoras;
    }

    


}




?>