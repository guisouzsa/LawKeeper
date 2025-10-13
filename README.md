# LawKeeper

**LawKeeper** é um sistema web simples e funcional para organização da rotina jurídica.  
Permite cadastrar, consultar, editar e excluir informações importantes de forma clara e independente.

---

## 🔧 Funcionalidades

O sistema é dividido em módulos independentes. Cada módulo funciona separadamente, sem obrigatoriedade de vínculo entre cadastros.

---

## 📂 Módulos do Sistema

### 👤 Clientes

Armazena dados de pessoas físicas ou jurídicas.

**Campos:**
- Nome completo  
- CPF ou CNPJ  
- Telefone  
- E-mail  
- Endereço  

---

### 📁 Processos

Gerencia registros de processos jurídicos.

**Campos:**
- Número do processo  
- Tipo (Ex: Civil, Penal, Trabalhista)  
- Status (Ex: Em andamento, Arquivado, Finalizado)  
- Descrição  

---

### 📝 Andamentos

Registra movimentações ou eventos jurídicos.

**Campos:**
- Título do andamento  
- Tipo (Ex: Audiência, Sentença, Petição)  
- Data  
- Descrição  

---

### 📌 Tarefas

Organiza prazos, compromissos e ações do dia a dia.

**Campos:**
- Título da tarefa  
- Data limite  
- Status (Pendente, Concluída, Atrasada)  
- Descrição  

---

## ✅ Recursos Gerais

- Cadastro, edição e exclusão de registros em todos os módulos  
- Estrutura simples e intuitiva  
- Interface limpa e acessível  
- Validação de dados com mensagens claras  
- Dados salvos de forma separada, sem dependência entre módulos  

---

## 🛠️ Tecnologias Utilizadas

- Laravel (PHP)  
- MySQL  
- Blade  
- Bootstrap  
- HTML/CSS  

---

