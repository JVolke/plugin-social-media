# Social Media – Anzeige von Buttons für Soziale Medien im Webshop

**Social Media** ist ein Widget für plentymarkets 7 Webshops. Das Plugin erlaubt Ihnen Buttons für Soziale Medien im Webshop anzuzeigen und Inhalte auf den aktivierten Seiten zu teilen.

## Social Media in plentymarkets einrichten

Aktivieren Sie die Sozialen Medien, die Sie im Webshop anzeigen möchten. Die passenden Buttons werden im verknüpften Container ausgegeben.

##### Soziale Medien aktivieren:

Ab Version 1.1.0 gibt es einen zweiten Container für die Darstellung der Social Media Buttons direkt am Artikel. Daneben wurden die Konfigurationsmöglichkeiten erweitert. Es gibt die zwei Container SocialMedia und SocialMediaSingleItem. SocialMediaSingleItem ist für die Anzeige der Buttons direkt am Artikel vorgesehen.

Einstellungen können für beide Container separat erfolgen. In den Konfigurationstabs "Standard" werden die Einstellungen für den Container SocialMedia getroffen. In den Tabs "SingleItem" werden die Einstellungen für den SocialMediaSingleItem Container getroffen.

## Einstellung des SocialMedia Containers:

1. Öffnen Sie das Menü **Plugins**.<br /> → Die Plugin-Übersicht wird geöffnet.
2. Klicken Sie auf **SocialMedia**.<br /> → Das Plugin wird in einem neuen Tab geöffnet.
3. Klicken Sie im Verzeichnisbaum auf **Konfiguration**.<br /> → Das Tab **Social Buttons Settings - Standard** ist bereits vorausgewählt.
4. Nehmen Sie die Einstellungen vor. Beachten Sie dazu die Erläuterungen in Tabelle 1.
5. **Speichern** Sie die Einstellungen.<br /> → Die gewählten Buttons werden aktiviert.

## Einstellung des SocialMediaSingleItem Containers:

1. Öffnen Sie das Menü **Plugins**.<br /> → Die Plugin-Übersicht wird geöffnet.
2. Klicken Sie auf **SocialMedia**.<br /> → Das Plugin wird in einem neuen Tab geöffnet.
3. Klicken Sie im Verzeichnisbaum auf **Konfiguration**.<br /> → Wechseln Sie in das Tab **Social Buttons Settings - SingleItem**.
4. Nehmen Sie die Einstellungen vor. Beachten Sie dazu die Erläuterungen in Tabelle 1.
5. **Speichern** Sie die Einstellungen.<br /> → Die gewählten Buttons werden aktiviert.

<table>
<thead>
<tr>  
<th>Einstellung (Für beide Container identisch)</th>
<th>Erläuterung</th>
</tr>
</thead>
<tbody>   
<tr>
<td><b>Show social media buttons</b></td>  
<td>Eine, mehrere oder <strong>ALLE</strong> Soziale Medien wählen, um die Buttons im Webshop anzuzeigen.</td>
</tr>
<tr>
<td><b>Select the theme of the social media buttons</b></td>  
<td>Wählen Sie die Darstellung der Social Media Buttons aus. Es stehen vier Themen zur Auswahl: Standard, Grey, White und Minimal</td>
</tr>
<tr>
<td><b>Use fix social media text, URL and image</b></td>  
<td>Ist kein Haken gesetzt, wird immer die aktuell offene Seite mit den dort vorhandenen Medien-Informationen geteilt. Wenn Sie einen Haken setzen, wird immer eine feste URL, ein fixer Text und ein fixes Bild geteilt.</td>
</tr>
<tr>
<td><b>Fix social media text</b></td>  
<td>Text eingeben, der über die gewählten Sozialen Medien geteilt werden soll.</td>
</tr>
<tr>
<td><b>Fix social media URL to share</b></td>  
<td>Hinterlegen Sie hier die URL die geteilt werden soll, bspw. die URL Ihrer Startseite.</td>
</tr>
<tr>
<td><b>Fix social media image to share</b></td>  
<td>Hinterlegen Sie hier die URL zu dem Bild, welches Sie für die Sozialen Netzwerke verwenden möchten.</td>
</tr>
</tbody>
<caption>Tab. 1: Soziale Medien aktivieren</caption>
</table>

## Social Media mit dem Webshop verknüpfen

Für die Sozialen Medien stehen Ihnen verschiedene Möglichkeiten zur Verfügung, um sie in Ihren Shop einzubinden.
Hierfür sind in den Templates in Ceres an relevanten Stellen Container hinterlegt, die zur Individualisierung mit Inhalt gefüllt werden.

##### Soziale Medien verknüpfen:

##### SocialMedia Container

1. Öffnen Sie das Menü **CMS » Container-Verknüpfungen**
2. Wählen Sie den Bereich **Social media buttons**.
3. Wählen Sie einen, mehrere oder **ALLE** Container, in denen Sie die Buttons anzeigen möchten, z.B. **Header: Left header container**.
4. **Speichern** Sie die Einstellungen.<br /> → Die Sozialen Medien werden im gewählten Container im Webshop angezeigt.

##### SocialMediaSingleItem Container

1. Öffnen Sie das Menü **CMS » Container-Verknüpfungen**
2. Wählen Sie den Bereich **Social media buttons for SingleItem**.
3. Wählen Sie den Container **SingleItem: Additional content after "Add to shopping cart" button**, es kann alternativ natürlich auch ein anderer Container zu Anzeige genutzt werden.
4. **Speichern** Sie die Einstellungen.<br /> → Die Sozialen Medien werden im gewählten Container im Webshop angezeigt.

## Lizenz

Das gesamte Projekt unterliegt der GNU AFFERO GENERAL PUBLIC LICENSE – weitere Informationen finden Sie in der [LICENSE.md](https://github.com/plentymarkets/plugin-social-media/blob/master/LICENSE.md).
