<?php
$content = file_get_contents("php://input");
$update = json_decode($content, true);
if(!$update)
{
  exit;
}
$message = isset($update['message']) ? $update['message'] : "";
$messageId = isset($message['message_id']) ? $message['message_id'] : "";
$chatId = isset($message['chat']['id']) ? $message['chat']['id'] : "";
$senderId = isset($message['chat']['id']) ? $message['chat']['id'] : "";
$firstname = isset($message['chat']['first_name']) ? $message['chat']['first_name'] : "";
$lastname = isset($message['chat']['last_name']) ? $message['chat']['last_name'] : "";
$username = isset($message['chat']['username']) ? $message['chat']['username'] : "";
$date = isset($message['date']) ? $message['date'] : "";
$text = isset($message['text']) ? $message['text'] : "";
$text = trim($text);
$text = strtolower($text);
header("Content-Type: application/json");
$response = '';
if(strpos($text, "/start") === 0 || $text=="espada")
{
	$response = "......!";
}
elseif (strpos($text, "vita") !== false)
{
	$response = "Le cose che venivano riflesse nei miei occhi non avevano significato. Le cose che non potevano essere riflesse nei miei occhi non esistevano.";
}
elseif (strpos($text, "significato") !== false)
{
	$response = "Il nostro mondo non ha alcun significato, neppure noi che ci viviamo abbiamo alcun significato, noi.... privi di significato, pensiamo al mondo nonostante anche l’essere consci che non abbia significato farlo, sia privo di significato";
}
elseif (strpos($text, "desider") !== false)
{
	$response = "Possiedo un cuore dunque invidio, possiedo un cuore dunque divoro, possiedo un cuore dunque depredo, possiedo un cuore dunque sono pigro, possiedo un cuore dunque sono superbo, possiedo un cuore dunque mi adiro, possiedo un cuore dunque desidero tutto!";
}
elseif (strpos($text, "donna") !== false)
{
	$response = "Vieni con me donna, non parlare. L'unica parola che ti è permessa è 'si'. Qualsiasi altra cosa tu dica è morte, non per te ma per i tuoi compagni. Non chiedere niente non raccontare niente, tu non hai nessun diritto ... Comprendilo bene, questa non è una negoziazione, è un ordine, donna.";
}
if (strpos($text, "fine") !== false) 
{
	$response = "Gli è rimasta ancora un po' di reatsu... ma questo è il suo limite... è la fine. la vostra fortuna è finita.. il sole è già tramontato nel palmo delle nostre mani!";
}
elseif (strpos($text, "mort") !== false)
{
	$response = "Cosa vuoi sentirti dire da me...? non preuccuparti è sicuramente vivo? scordatelo. Io non sono qui per coccolarti. Non ti capisco tanto prima o poi tutti i tuoi compagni verranno annientati, che uno muoia prima o dopo non fa differenza, avrebbero dovuto prevederlo fin dall'inizio. Se non ci sono riusciti la colpa risiede nella loro imbecillità, dovresti riderci sopra e basta pensando a quanto sono stupidi perche non ci riesci?.... mi sarei arrabbiato davanti alla stupidità di chi si precipita qui senza nemmeno pensare a soppesare le proprie abilità";

}
elseif (strpos($text, "vittoria") !== false)
{
	$response = "Anche se ti alzi mille volte, non ci sarà alcuna vittoria per nessuno di voi. ";

}
elseif (strpos($text, "cuore") !== false)
{
	$response = "Cuore, dici? Voi umani siete sempre così veloci nel parlare di tali cose. Come se portaste i vostri cuori nei palmi delle mani. Ma questo mio occhio percepisce tutto. Non c'è niente che questo occhio non riesca a vedere, se non lo vede, allora non esiste. Questo è il presupposto in base al quale ho sempre combattuto. Che cos'è questo cuore? Se ti strappo quel torace, lo vedrò lì? Se Apro il tuo cranio, lo vedrò lì?";

}
elseif (strpos($text, "debole") !== false)
{
	$response = "Non lasciarti scuotere. Non indebolire la tua posizione. Apri i tuoi sensi. E non abbassare la guardia per un istante.";

}
elseif (strpos($text, "somigli") !== false)
{
	$response = "Non importa quanto il tuo aspetto e le tue tecniche possano assomigliare a quelli di un Arrancar, sei lontano da noi come la Terra dal cielo. È un percorso comprensibile per gli umani e per gli Shinigami che desiderano ottenere il potere di imitare gli Hollow. Tuttavia, non ti permetterà mai di stare allo stesso livello di Arrancar.";

}
elseif (strpos($text, "disper") !== false)
{
	$response = "Le tue parole sono quelle di un uomo che non conosce la vera disperazione. Se non lo conosci, allora permettimi di insegnarti. Questo è il volto della vera disperazione.";
}
elseif (strpos($text, "sciocc") !== false)
{
	$response = "Sei uno sciocco. Cerchi volentieri di sfidare un avversario molto più potente di te tanto da provare una paura primordiale nel tuo essere. Incomprensibile. Se questo è il lavoro del cuore di cui parli, quindi è perché posseggono questo cuore che gli umani si fanno del male, perché possiedi questo cuore che perdi la vita?.";
}
elseif (strpos($text, "pietà") !== false)
{
	$response = "Capisco. Quindi non mostri pietà. Proprio come un vero Hollow";
}
elseif (strpos($text, "ulquiorra") !== false)
{
	$response = "4° espada al servizio di Aizen dell'esercito degli Arrancar; Ulquiorra è una figura molto fredda, insensibile e spassionata, ed è piuttosto distaccata, meditabonda e indifferente, disposta a nuocere ai suoi compagni oltre ai suoi nemici nel caso si mettessero sulla sua strada. Si riferisce a chiunque non trovi interessante come 'spazzatura' e li considera sacrificabili. Nonostante ciò, come la maggior parte degli altri espada principali, non è particolarmente violento e combatterà solo se provocato o ordinato da Aizen.";
}

$parameters = array('chat_id' => $chatId, "text" => $response);
$parameters["method"] = "sendMessage";
echo json_encode($parameters);
