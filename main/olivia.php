<h1>Setting up Mint 15 (Olivia) </h1>
<section>
    <ul>
        <li>File mods
            <ul><li>sudo vi /etc/sudoers
                    <ul><li>&lt;login&gt;    ALL=(ALL:ALL) NOPASSWD: ALL</li></ul>
                </li></ul>
        </li>
        <li>Software
            <ul>
                <li>openssh-server</li>
                <li>lxde</li>
                <li>x2goclient</li>
                <li>mysql - server</li>
                <li>phpmyadmin</li>
                <li>mantis/youtrack</li>
                <li>php5 - xdebug</li>
                <li>wine</li>
                <li>tomcat6</li>
                <li>git</li>
                <li>eclipse</li>
            </ul>
        </li>
        <li>Tweeks
            <ul>
                <li>Desktop Sharing - setup</li>
                <li>x2goserver
                    <ul>
                        <li>sudo add-apt-repository ppa:x2go/stable</li>
                        <li>sudo apt-get update</li>
                        <li>sudo apt-get install x2goserver</li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>Tasks
            <ul>
                <li>Use sudo without password</li>
                <li>Connect using putty</li>
                <li>Connect using x2go</li>
                <li>Mantis</li>
                <li>Eclipse</li>
                <li>Git</li>
                <li>x install web server</li>
            </ul>
        </li>
    </ul>
    Books to read
    <li>Stranger in a Strange Land - really stretches your mind. What is religion? What is humanity? Little questions like that.</li>
    <li>Ender's Game - A great morality play; and a very exciting read.</li>
    <li>Slaughterhouse Five - (or really anything and everything by Vonnegut. The guy is a great master, and every one of his books will open your mind.)</li>
    <li>The Hobbit - Okay, not Sci Fi, but a great book on greed. Pure and simple. Or perhaps not so simple.</li>
    <li>Aristoi - A deep look into a future of plenty, where society needs rigid controls to prevent a nano tech disaster. Also great insights into mind-computer interfaces and where they can lead.</li>
    <li>Consider Phlebas - A different take on a future of plenty, where society is so advanced, the artificial intelligences we have developed treat us like their pets.</li>
    <li>Steel Beach - Yet another take on a future of plenty, more near-term, and about the angst it can engender.</li>
    <li>The Peace War - Just read it.</li>
    <li>Bible</li>
    <li>Homer’s Iliad</li>
    <li>Homer’s Odyssey</li>
    <li>Exodus & Ecclesiastes & The Psalms</li>
    <li>Virgil’s Aeneid</li>
    <li>Socrates’ Apology</li>
    <li>The Book of Matthew & Jefferson’s Bible</li>
    <li>Plato’s Repulic</li>
    <li>Seneca’s Letters from a Stoic</li>
    <li>Aristotle’s Poetics</li>
    <li>Dante’s Inferno</li>
    <li>The Declaration of Independence</li>
    <li>The Constitution</li>
    <li>John Milton’s Paradise Lost</li>
    <li>Shakespeare’s Hamlet</li>
    <li>Newton’s Principia</li>
    <li>Adam Smith’s Wealth of Nations and Theory of Moral Sentiments</li>
    <li>Henry David Thoreau’s Walden</li>
    <li>Mark Twain’s Huckleberry Finn (& all of his work)</li>
    <li>Shakespeare’s Hamlet</li>
    <li>Ludwig von Mises’ A Theory of Money and Credit</li>
    <li>F.A. Hayek’s The Road to Serfdom</li>
    <li>Herman Melville’s Moby Dick</li>
    <li>Einstein’s The Meaning of Relativity</li>
    <li>Joseph Campbell’s The Hero With a Thousand Faces and The Power of Myth</li>
    <li>Ron Paul’s Revolution & End the Fed</li>
    <li>The Koran (similar to #1)</li>
    <li>1984</li>
    <li>Brave New World</li>
    <li>The Magna Carta</li>
    <li>Dale C. Carson's "Arrest-Proof Yourself".</li>
    <li>Applied Cryptography</li>
    <li>Atlas Shrugged </li>
    <li>Communist Manifesto</li>
    <li>Wealth of Nations</li>
    <li>"The Brothers Karamazov" by Dostoyevsky.</li>
    <li>"Foundation" by Asimov. </li>
    <li>"Israel" by Martin Gilbert.</li>
    <li>"Band of Brothers" by Stephen Ambrose.</li>
    <li>A Confederacy of Dunces</li>
    <li>Catch-22</li>
    <li>Dharma Bums</li>
    <li>Lord of the Flies</li>
    <li>Momo</li>
    <li>On the Road</li>
    <li>Siddharta</li>
    <li>The Golden Notebook</li>
    <li>The Grapes of Wrath</li>
    <li>The Razor's Edge</li>
    <li>A Clockwork Orange</li>
    <li>Player Piano</li>
    <li>Snowcrash</li>
    <li>The Diamond Age</li>
    <li>The Dispossessed</li>
    <li>The Island</li>
    <li>The Stand ...</li>
    <li>The Dialogue Concerning the Two Chief World Systems - Galileo</li>
    <li>Gödel, Escher, Bach: An Eternal Golden Braid - Hofstadter</li>
    <li>The Foundation Trilogy - Asimov</li>
    <li>Frankenstein; or, The Modern Prometheus - Shelly</li>
    <li>Plato, Republic (add Phaedo and Phaedrus if you like that)</li>
    <li>Aristotle, Nicomachean Ethics</li>
    <li>Confucius, The Analects</li>
    <li>Cicero, On Duties (esp. Book III)</li>
    <li>Plotinus, Enneads (I.6)</li>
    <li>Dorotheos of Gaza, Discourses (esp. "On Renunciation" and "On Refusal to Judge our Neighbor")</li>
    <li>Augustine, The Confessions</li>
    <li>Marx, Communist Manifesto</li>
    <li>Leo XIII, Rerum Novarum</li>
    <li>Wendell Berry, Life is a Miracle</li>
    Unix Commands
    <li>cat numbers_1_1000.txt | head -n 2</li>
    <li>cat ips.txt | sort -u</li>
    <li>cat ips.txt | sort | uniq -c</li>
    <li>cut -d ',' ips_ua.txt -f 2</li>
    <li>join -t , -1 1 -2 1 &lt;(sort ips_ua.txt) &lt;(sort ips_country.txt)</li>
    <li>join -t , -1 1 -2 1 &lt;(sort ips_ua.txt) &lt;(sort ips_country.txt) -v 2</li>
</section>
