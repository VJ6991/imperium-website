from PIL import Image
import os

images = {
    'avaya': r'C:\Users\VishnuVijayan\.gemini\antigravity\brain\4a943ac1-7c52-49d3-8b20-f7948e4ad0b2\media__1773211071122.png',
    'konnect': r'C:\Users\VishnuVijayan\.gemini\antigravity\brain\4a943ac1-7c52-49d3-8b20-f7948e4ad0b2\media__1773211090434.png',
    'inaipi': r'C:\Users\VishnuVijayan\.gemini\antigravity\brain\4a943ac1-7c52-49d3-8b20-f7948e4ad0b2\media__1773211115467.png',
    'edaya': r'C:\Users\VishnuVijayan\.gemini\antigravity\brain\4a943ac1-7c52-49d3-8b20-f7948e4ad0b2\media__1773211131116.png',
    'mondee': r'C:\Users\VishnuVijayan\.gemini\antigravity\brain\4a943ac1-7c52-49d3-8b20-f7948e4ad0b2\media__1773211171855.png'
}

output_dir = r'c:\programming\imperiumwebsite-release\assets\image'

for name, path in images.items():
    if os.path.exists(path):
        img = Image.open(path).convert("RGBA")
        datas = img.getdata()
        
        newData = []
        for item in datas:
            # Change all white (also shades of white)
            # to transparent
            if item[0] > 220 and item[1] > 220 and item[2] > 220:
                newData.append((255, 255, 255, 0))
            else:
                newData.append(item)
                
        img.putdata(newData)
        
        # Crop the image to bounding box of non-transparent pixels
        bbox = img.getbbox()
        if bbox:
            img = img.crop(bbox)
            
        output_path = os.path.join(output_dir, f'partner_new_{name}.png')
        img.save(output_path, "PNG")
        print(f"Saved {output_path}")
    else:
        print(f"File not found: {path}")
