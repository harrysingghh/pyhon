list1 = ["False","await","else","import","pass","None","break","except","in","raise","True","class","finally","is","return","and","continue","for","lambda","try","as","def","from","nonlocal","while","assert","del","global","not","with","async","elif","if","or","yield"]
ii=1
for i in list1:
    if ii%5==0:
        print("</tr>")
        print("<tr>")
    print("<td>",i,"</td>")
    ii+=1
