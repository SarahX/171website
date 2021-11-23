<?php include 'inc/html-top.php';?>

   <body>
      <div class="container">

         <header>
            <h1>Programming Languages</h1>
            <div class="intro">Learn about prog lang theory and use cases.</div>
         </header>

         <?php include 'inc/nav.php';?>

         <section class="lead">
            <h2 class="definition">Definitions</h2>
            <figure>
               <img src="images/helloworld.png" alt="Code">
               <figcaption>Code editor with Hello world in C</figcaption>
            </figure>
            <p class="intro2">A programming language is a notation for writing programs, which are specifications of a computation or algorithm. Some authors restrict the term "programming language" to those languages that can express all possible algorithms. Some traits often considered important for what constitutes a programming language include the topics listed below.</p>
         </section>

         <article>
            <h3><em>Function and target</em></h3>
            <p>A computer programming language is a language used to write computer programs, which involves a computer performing some kind of computation or algorithm and possibly control external devices such as printers, disk drives, robots, and so on. For example, PostScript programs are frequently created by another program to control a computer printer or display. More generally, a programming language may describe computation on some, possibly abstract, machine. It is generally accepted that a complete specification for a programming language includes a description, possibly idealized, of a machine or processor for that language. In most practical contexts, a programming language involves a computer; consequently, programming languages are usually defined and studied this way. Programming languages differ from natural languages in that natural languages are only used for interaction between people, while programming languages also allow humans to communicate instructions to machines.</p>
            <figure>
               <img src="images/python.png" alt="Parse tree of Python">
               <figcaption>The parse tree of Python code with inset tokenization</figcaption>
            </figure>

            <h3><em>Abstractions</em></h3>
            <p>Programming languages usually contain abstractions for defining and manipulating data structures or controlling the flow of execution. The practical necessity that a programming language support adequate abstractions is expressed by the abstraction principle. This principle is sometimes formulated as a recommendation to the programmer to make proper use of such abstractions.</p>

            <h3><em>Expressive power</em></h3>
            <p>The theory of computation classifies languages by the computations they are capable of expressing. All Turing-complete languages can implement the same set of algorithms. ANSI/ISO SQL-92 and Charity are examples of languages that are not Turing complete, yet are often called programming languages.</p>

            <h3><strong>More about definitions</strong></h3>
            <p>Markup languages like XML, HTML, or troff, which define structured data, are not usually considered programming languages. Programming languages may, however, share the syntax with markup languages if a computational semantics is defined. XSLT, for example, is a Turing complete language entirely using XML syntax. Moreover, LaTeX, which is mostly used for structuring documents, also contains a Turing complete subset. The term computer language is sometimes used interchangeably with programming language. However, the usage of both terms varies among authors, including the exact scope of each. One usage describes programming languages as a subset of computer languages. Similarly, languages used in computing that have a different goal than expressing computer programs are generically designated computer languages. For instance, markup languages are sometimes referred to as computer languages to emphasize that they are not meant to be used for programming. Another usage regards programming languages as theoretical constructs for programming abstract machines, and computer languages as the subset thereof that runs on physical computers, which have finite hardware resources. John C. Reynolds emphasizes that formal specification languages are just as much programming languages as are the languages intended for execution. He also argues that textual and even graphical input formats that affect the behavior of a computer are programming languages, despite the fact they are commonly not Turing-complete, and remarks that ignorance of programming language concepts is the reason for many flaws in input formats.</p>

            <h2>History</h2>
            <h3><strong>Early developments</strong></h3>
            <p>Very early computers, such as Colossus, were programmed without the help of a stored program, by modifying their circuitry or setting banks of physical controls. Slightly later, programs could be written in machine language, where the programmer writes each instruction in a numeric form the hardware can execute directly. For example, the instruction to add the value in two memory locations might consist of 3 numbers: an "opcode" that selects the "add" operation, and two memory locations. The programs, in decimal or binary form, were read in from punched cards, paper tape, magnetic tape or toggled in on switches on the front panel of the computer. Machine languages were later termed first-generation programming languages (1GL). The next step was the development of the so-called second-generation programming languages (2GL) or assembly languages, which were still closely tied to the instruction set architecture of the specific computer. These served to make the program much more human-readable and relieved the programmer of tedious and error-prone address calculations. The first high-level programming languages, or third-generation programming languages (3GL), were written in the 1950s. An early high-level programming language to be designed for a computer was Plankalkül, developed for the German Z3 by Konrad Zuse between 1943 and 1945. However, it was not implemented until 1998 and 2000. John Mauchly's Short Code, proposed in 1949, was one of the first high-level languages ever developed for an electronic computer. Unlike machine code, Short Code statements represented mathematical expressions in understandable form. However, the program had to be translated into machine code every time it ran, making the process much slower than running the equivalent machine code. At the University of Manchester, Alick Glennie developed Autocode in the early 1950s. As a programming language, it used a compiler to automatically convert the language into machine code. The first code and compiler was developed in 1952 for the Mark 1 computer at the University of Manchester and is considered to be the first compiled high-level programming language.</p>
            <p>The second autocode was developed for the Mark 1 by R. A. Brooker in 1954 and was called the "Mark 1 Autocode". Brooker also developed an autocode for the Ferranti Mercury in the 1950s in conjunction with the University of Manchester. The version for the EDSAC 2 was devised by D. F. Hartley of University of Cambridge Mathematical Laboratory in 1961. Known as EDSAC 2 Autocode, it was a straight development from Mercury Autocode adapted for local circumstances and was noted for its object code optimisation and source-language diagnostics which were advanced for the time. A contemporary but separate thread of development, Atlas Autocode was developed for the University of Manchester Atlas 1 machine. In 1954, FORTRAN was invented at IBM by John Backus. It was the first widely used high-level general purpose programming language to have a functional implementation, as opposed to just a design on paper. It is still a popular language for high-performance computing and is used for programs that benchmark and rank the world's fastest supercomputers. Another early programming language was devised by Grace Hopper in the US, called FLOW-MATIC. It was developed for the UNIVAC I at Remington Rand during the period from 1955 until 1959. Hopper found that business data processing customers were uncomfortable with mathematical notation, and in early 1955, she and her team wrote a specification for an English programming language and implemented a prototype. The FLOW-MATIC compiler became publicly available in early 1958 and was substantially complete in 1959. FLOW-MATIC was a major influence in the design of COBOL, since only it and its direct descendant AIMACO were in actual use at the time.</p>

            <h3>Refinement</h3>
            <p class="paradigm">The period from the 1960s to the late 1970s brought the development of the major language paradigms now in use: </p>
            <ol>
               <li>array programming</li>
               <li>procedural programming</li>
               <li>functional programming</li>
               <li>systems programming</li>
               <li>logic programming</li>
               <li>statically typed programming</li>
               <li>structued programming</li>
            </ol>
            <p class="type">Type Theory:</p>
            <ul>
               <li>single-typed</li>
               <li>untyped</li>
               <li>static</li>
               <li>dynamic</li>
               <li>weak</li>
               <li>strong</li>
               <li>manifestly typed</li>
               <li>type-inferred</li>
            </ul>

            <h3>Consolidation and growth</h3>
            <p>The 1980s were years of relative consolidation. C++ combined object-oriented and systems programming. The United States government standardized Ada, a systems programming language derived from Pascal and intended for use by defense contractors. In Japan and elsewhere, vast sums were spent investigating the so-called "fifth-generation" languages that incorporated logic programming constructs. The functional languages community moved to standardize ML and Lisp. Rather than inventing new paradigms, all of these movements elaborated upon the ideas invented in the previous decades. One important trend in language design for programming large-scale systems during the 1980s was an increased focus on the use of modules or large-scale organizational units of code. Modula-2, Ada, and ML all developed notable module systems in the 1980s, which were often wedded to generic programming constructs.</p>
            <p>The rapid growth of the Internet in the mid-1990s created opportunities for new languages. Perl, originally a Unix scripting tool first released in 1987, became common in dynamic websites. Java came to be used for server-side programming, and bytecode virtual machines became popular again in commercial settings with their promise of "Write once, run anywhere" (UCSD Pascal had been popular for a time in the early 1980s). These developments were not fundamentally novel; rather, they were refinements of many existing languages and paradigms (although their syntax was often based on the C family of programming languages). Programming language evolution continues, in both industry and research. Current directions include security and reliability verification, new kinds of modularity (mixins, delegates, aspects), and database integration such as Microsoft's LINQ. Fourth-generation programming languages (4GL) are computer programming languages that aim to provide a higher level of abstraction of the internal computer hardware details than 3GLs. Fifth-generation programming languages (5GL) are programming languages based on solving problems using constraints given to the program, rather than using an algorithm written by a programmer.</p>
         </article>

         <aside>
            <h2>Elements</h2>
            <p>All programming languages have some primitive building blocks for the description of data and the processes or transformations applied to them (like the addition of two numbers or the selection of an item from a collection). These primitives are defined by syntactic and semantic rules which describe their structure and meaning respectively.</p>

            <h3>Syntax</h3>
            <p>A programming language's surface form is known as its syntax. Most programming languages are purely textual; they use sequences of text including words, numbers, and punctuation, much like written natural languages. On the other hand, there are some programming languages which are more graphical in nature, using visual relationships between symbols to specify a program. The syntax of a language describes the possible combinations of symbols that form a syntactically correct program. The meaning given to a combination of symbols is handled by semantics (either formal or hard-coded in a reference implementation). Since most languages are textual, this article discusses textual syntax. 
            <p>Not all syntactically correct programs are semantically correct. Many syntactically correct programs are nonetheless ill-formed, per the language's rules; and may (depending on the language specification and the soundness of the implementation) result in an error on translation or execution. In some cases, such programs may exhibit undefined behavior. Even when a program is well-defined within a language, it may still have a meaning that is not intended by the person who wrote it.</p>

            <h3>Semantics</h3>
            <p>The static semantics defines restrictions on the structure of valid texts that are hard or impossible to express in standard syntactic formalisms. For compiled languages, static semantics essentially include those semantic rules that can be checked at compile time. Examples include checking that every identifier is declared before it is used (in languages that require such declarations) or that the labels on the arms of a case statement are distinct. Many important restrictions of this type, like checking that identifiers are used in the appropriate context (e.g. not adding an integer to a function name), or that subroutine calls have the appropriate number and type of arguments, can be enforced by defining them as rules in a logic called a type system. Other forms of static analyses like data flow analysis may also be part of static semantics. Newer programming languages like Java and C# have definite assignment analysis, a form of data flow analysis, as part of their static semantics.</p>
            <p>Once data has been specified, the machine must be instructed to perform operations on the data. For example, the semantics may define the strategy by which expressions are evaluated to values, or the manner in which control structures conditionally execute statements. The dynamic semantics (also known as execution semantics) of a language defines how and when the various constructs of a language should produce a program behavior. There are many ways of defining execution semantics. Natural language is often used to specify the execution semantics of languages commonly used in practice. A significant amount of academic research went into formal semantics of programming languages, which allow execution semantics to be specified in a formal manner. Results from this field of research have seen limited application to programming language design and implementation outside academia.</p>

            <h3>Type System</h3>
            <p>A type system defines how a programming language classifies values and expressions into types, how it can manipulate those types and how they interact. The goal of a type system is to verify and usually enforce a certain level of correctness in programs written in that language by detecting certain incorrect operations. Any decidable type system involves a trade-off: while it rejects many incorrect programs, it can also prohibit some correct, albeit unusual programs. In order to bypass this downside, a number of languages have type loopholes, usually unchecked casts that may be used by the programmer to explicitly allow a normally disallowed operation between different types. In most typed languages, the type system is used only to type check programs, but a number of languages, usually functional ones, infer types, relieving the programmer from the need to write type annotations. The formal design and study of type systems is known as type theory.</p>
            <p>A language is typed if the specification of every operation defines types of data to which the operation is applicable. For example, the data represented by "this text between the quotes" is a string, and in many programming languages dividing a number by a string has no meaning and will not be executed. The invalid operation may be detected when the program is compiled ("static" type checking) and will be rejected by the compiler with a compilation error message, or it may be detected while the program is running ("dynamic" type checking), resulting in a run-time exception. Many languages allow a function called an exception handler to handle this exception and, for example, always return "-1" as the result. A special case of typed languages are the single-typed languages. These are often scripting or markup languages, such as REXX or SGML, and have only one data type–—most commonly character strings which are used for both symbolic and numeric data. In contrast, an untyped language, such as most assembly languages, allows any operation to be performed on any data, generally sequences of bits of various lengths. High-level untyped languages include BCPL, Tcl, and some varieties of Forth. In practice, while few languages are considered typed from the type theory (verifying or rejecting all operations), most modern languages offer a degree of typing. Many production languages provide means to bypass or subvert the type system, trading type-safety for finer control over the program's execution (such as casting).</p>
         </aside>
         
         <footer>
            <h2>Citations</h2>
            <ul class="flowing-boxes">
               <li><a href="https://web.archive.org/web/20121108043216/http://www.emu.edu.tr/aelci/Courses/D-318/D-318-Files/plbook/intro.htm">Ettinger, James (2004) Jacquard's Web, Oxford University Press</a></li>
               <li>Aaby, Anthony (2004). Introduction to Programming Languages</li>
               <li>MacLennan, Bruce J. (1987). Principles of Programming Languages. Oxford University Press. p. 1. ISBN 978-0-19-511306-8.</li>
               <li>Raphael Finkel: <a href="https://web.archive.org/web/20141022141742/http://www.nondot.org/sabre/Mirrored/AdvProgLangDesign/">Advanced Programming Language Design, Addison Wesley 1995.</a></li>
            </ul>
            <h2>Source</h2>
            <p>Here is the link to the Wikipedia page: <a href="https://en.wikipedia.org/wiki/Programming_language">Programming Languages</a></p>
         </footer>
      </div>
   </body>
</html>


