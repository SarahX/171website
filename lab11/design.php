<?php include 'inc/html-top.php';?>

   <body>

      <div class="container">

         <header>
            <h1>Programming Languages</h1>
            <div class="intro">Learn about prog lang theory and use cases.</div>
         </header>

        <?php include 'inc/nav.php';?>
        
         <article>

            <h3><em>Design and Implementation</em></h3>
            <p>Programming languages share properties with natural languages related to their purpose as vehicles for communication, having a syntactic form separate from its semantics, and showing language families of related languages branching one from another. But as artificial constructs, they also differ in fundamental ways from languages that have evolved through usage. A significant difference is that a programming language can be fully described and studied in its entirety since it has a precise and finite definition. By contrast, natural languages have changing meanings given by their users in different communities. While constructed languages are also artificial languages designed from the ground up with a specific purpose, they lack the precise and complete semantic definition that a programming language has. Many programming languages have been designed from scratch, altered to meet new needs, and combined with other languages. Many have eventually fallen into disuse. Although there have been attempts to design one "universal" programming language that serves all purposes, all of them have failed to be generally accepted as filling this role. The need for diverse programming languages arises from the diversity of contexts in which languages are used: programs range from tiny scripts written by individual hobbyists to huge systems written by hundreds of programmers, programmers range in expertise from novices who need simplicity above all else to experts who may be comfortable with considerable complexity, programs must balance speed, size, and simplicity on systems ranging from microcontrollers to supercomputers,  programs may be written once and not change for generations, or they may undergo continual modification, programmers may simply differ in their tastes: they may be accustomed to discussing problems and expressing them in a particular language.</p>

            <p>One common trend in the development of programming languages has been to add more ability to solve problems using a higher level of abstraction. The earliest programming languages were tied very closely to the underlying hardware of the computer. As new programming languages have developed, features have been added that let programmers express ideas that are more remote from simple translation into underlying hardware instructions. Because programmers are less tied to the complexity of the computer, their programs can do more computing with less effort from the programmer. This lets them write more functionality per time unit.</p>

            <p>Natural language programming has been proposed as a way to eliminate the need for a specialized language for programming. However, this goal remains distant and its benefits are open to debate. Edsger W. Dijkstra took the position that the use of a formal language is essential to prevent the introduction of meaningless constructs, and dismissed natural language programming as "foolish". Alan Perlis was similarly dismissive of the idea.[ Hybrid approaches have been taken in Structured English and SQL. A language's designers and users must construct a number of artifacts that govern and enable the practice of programming. The most important of these artifacts are the language specification and implementation.</p>

            <p>The specification of a programming language is an artifact that the language users and the implementors can use to agree upon whether a piece of source code is a valid program in that language, and if so what its behavior shall be. A programming language specification can take several forms, including the following explained in the aside:</p>

         </article>

         <aside>

            <h3>Specification and Implementation</h3>
            <p>An explicit definition of the syntax, static semantics, and execution semantics of the language. While syntax is commonly specified using a formal grammar, semantic definitions may be written in natural language (e.g., as in the C language), or a formal semantics (e.g., as in Standard ML and Scheme specifications).</p>

            <p>A description of the behavior of a translator for the language (e.g., the C++ and Fortran specifications). The syntax and semantics of the language have to be inferred from this description, which may be written in natural or a formal language.</p>

            <p>A reference or model implementation, sometimes written in the language being specified (e.g., Prolog or ANSI REXX[59]). The syntax and semantics of the language are explicit in the behavior of the reference implementation.</p>

            <p>An implementation of a programming language provides a way to write programs in that language and execute them on one or more configurations of hardware and software. There are, broadly, two approaches to programming language implementation: compilation and interpretation. It is generally possible to implement a language using either technique. The output of a compiler may be executed by hardware or a program called an interpreter. In some implementations that make use of the interpreter approach there is no distinct boundary between compiling and interpreting. For instance, some implementations of BASIC compile and then execute the source a line at a time. Programs that are executed directly on the hardware usually run much faster than those that are interpreted in software. One technique for improving the performance of interpreted programs is just-in-time compilation. Here the virtual machine, just before execution, translates the blocks of bytecode which are going to be used to machine code, for direct execution on the hardware.</p>

         </aside>

      </div>

   </body>
   
</html>

